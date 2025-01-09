<?php

namespace App\Filament\Resources\OrderResource\Pages;

use App\Filament\Resources\OrderResource;
use App\Models\Event;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateOrder extends CreateRecord
{
    protected static string $resource = OrderResource::class;

    public function afterCreate(): void
    {
        $order = $this->record;
        $order->event->update([
            'quota' => $order->event->quota - $order->quantity
        ]);
    }
}
