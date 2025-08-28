<?php

namespace App\Filament\Resources\Transactions\Tables;

use Filament\Tables\Table;
use App\Models\Transaction;
use Filament\Actions\Action;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Notifications\Notification;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Actions\ForceDeleteBulkAction;

class TransactionsTable
{
    public static function configure(Table $table): Table
    {
        return $table
        ->columns([
            ImageColumn::make('student.image')
            ->label('Photo')
            ->searchable(),
            TextColumn::make('student.name')
            ->searchable(),
            TextColumn::make('booking_trx_id')
            ->searchable(),
            TextColumn::make('pricing.name')
            ->searchable(),
            TextColumn::make('sub_total_amount')
            ->numeric()
            ->sortable(),
            TextColumn::make('grand_total_amount')
            ->numeric()
            ->sortable(),
            // TextColumn::make('total_tax_amount')
            // ->numeric()
            // ->sortable(),
            IconColumn::make('is_paid')
            ->boolean(),
            TextColumn::make('payment_type')
            ->searchable(),
            TextColumn::make('start_date')
            ->date()
            ->sortable(),
            TextColumn::make('end_date')
            ->date()
            ->sortable(),
            TextColumn::make('deleted_at')
            ->dateTime()
            ->sortable()
            ->toggleable(isToggledHiddenByDefault: true),
            TextColumn::make('created_at')
            ->dateTime()
            ->sortable()
            ->toggleable(isToggledHiddenByDefault: true),
            TextColumn::make('updated_at')
            ->dateTime()
            ->sortable()
            ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                TrashedFilter::make(),
                ])
                ->recordActions([
                    ViewAction::make(),
                    EditAction::make(),
                    Action::make('approve')
                    ->label('Approve')
                    ->action(function (Transaction $record) {
                        $record->is_paid = true;
                        $record->save();

                        Notification::make()
                        ->title('Order Approved')
                        ->success()
                        ->body('The Order has been successfully approved.')
                        ->send();

                        // Kirim email, kirim Wa
                    })
                    ->color('success')
                    ->requiresConfirmation()
                    ->visible(fn (Transaction $record) => !$record->is_paid),
                    ])
                    ->toolbarActions([
                        BulkActionGroup::make([
                            DeleteBulkAction::make(),
                            ForceDeleteBulkAction::make(),
                            RestoreBulkAction::make(),
                        ]),
                    ]);
                }
            }