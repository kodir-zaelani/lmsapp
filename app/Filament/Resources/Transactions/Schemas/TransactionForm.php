<?php

namespace App\Filament\Resources\Transactions\Schemas;

use App\Models\User;
use App\Models\Pricing;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Wizard;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\ToggleButtons;
use Filament\Schemas\Components\Wizard\Step;

class TransactionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
        ->components([
            Wizard::make([
                Step::make('Product and Price')
                ->schema([
                    Grid::make([
                        'default' => 2,
                        'sm' => 2,
                        ])
                        ->schema([
                            Select::make('pricing_id')
                            ->relationship('pricing', 'name')
                            ->searchable()
                            ->preload()
                            ->required()
                            ->live()
                            ->afterStateUpdated(function ($state, callable $set) {
                                $pricing = Pricing::find($state);

                                $price = $pricing->price;
                                $duration = $pricing->duration;

                                $subTotal = $price ;
                                $totalPPn = $subTotal * 0.11;
                                $totalAmount = $subTotal + $totalPPn;

                                $set('total_tax_amount', $totalPPn);
                                $set('sub_total_amount', $price);
                                $set('grand_total_amount', $totalAmount);
                                $set('duration', $duration);
                            })
                            ->afterStateHydrated(function (callable $set, $state) {
                                $pricingId = $state;

                                if ($pricingId) {
                                    $pricing = Pricing::find($pricingId);
                                    $duration = $pricing->duration;
                                    $set('duration', $duration);
                                }
                            }),
                            TextInput::make('duration')
                            ->prefix('Month')
                            ->numeric()
                            ->readOnly(),
                        ]),
                        Grid::make([
                            'default' => 3,
                            'sm' => 3,
                            ])
                            ->schema([
                                TextInput::make('sub_total_amount')
                                ->prefix('IDR')
                                ->numeric()
                                ->readOnly()
                                ->required(),
                                TextInput::make('total_tax_amount')
                                ->prefix('IDR')
                                ->numeric()
                                ->readOnly()
                                ->required(),
                                TextInput::make('grand_total_amount')
                                ->helperText('Harga sudah termasuk PPn 11%')
                                ->prefix('IDR')
                                ->numeric()
                                ->readOnly()
                                ->required(),
                            ]),
                            Grid::make([
                                'default' => 2,
                                'sm' => 2,
                                ])
                                ->schema([
                                    DatePicker::make('start_date')
                                    ->live()
                                    ->afterStateUpdated(function ($state, callable $set, callable $get){
                                        $duration = $get('duration');
                                        if ($state && $duration) {
                                            $endedAt = \Carbon\Carbon::parse($state)->addMonth($duration);
                                            $set('end_date', $endedAt->format('Y-m-d'));
                                        }
                                    })
                                    ->required(),
                                    DatePicker::make('end_date')
                                    ->readOnly()
                                    ->required(),
                                ]),
                            ]),
                            Step::make('Customer Information')
                            ->schema([
                                Select::make('user_id')
                                ->relationship('student', 'name')
                                ->searchable()
                                ->preload()
                                ->required()
                                ->live()
                                ->afterStateUpdated(function ($state, callable $set) {
                                    $user = User::find($state);

                                    $name = $user->name;
                                    $email = $user->email;

                                    $set('name', $name);
                                    $set('email', $email);
                                })
                                ->afterStateHydrated(function (callable $set, $state) {
                                    $userId = $state;

                                    if ($userId) {
                                        $user = User::find($userId);
                                        $name = $user->name;
                                        $email = $user->email;
                                        $set('name', $name);
                                        $set('email', $email);
                                    }
                                }),
                                TextInput::make('name')
                                ->maxLength(255)
                                ->readOnly()
                                ->required(),
                                TextInput::make('email')
                                ->maxLength(255)
                                ->readOnly()
                                ->required(),
                            ]),
                            Step::make('Payment Information')
                            ->schema([
                                ToggleButtons::make('is_paid')
                                ->label('Apakah sudah membayar?')
                                ->boolean()
                                ->grouped()
                                ->icons([
                                    true => 'heroicon-o-pencil',
                                    false => 'heroicon-o-clock',
                                    ])
                                    ->required(),
                                    Select::make('payment_type')
                                    ->options([
                                        'Midtrans' => 'Midtrans',
                                        'Manual' => 'Manual',
                                        ])
                                        ->required(),
                                        FileUpload::make('proof')
                                        ->label('Bukti Transfer')
                                        ->image()
                                        ->default(null),
                                    ]),
                                    ])
                                    ->skippable()
                                    ->columnSpanFull(),
                                ]);
                            }
                        }