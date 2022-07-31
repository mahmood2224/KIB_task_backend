<?php

namespace App\Exports;

use App\Models\RelationType;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithEvents;
use \Maatwebsite\Excel\Sheet;

class InvoiceReport implements WithHeadings, WithCustomStartCell, WithEvents
{
    /**
     * @return \Illuminate\Support\Collection
     */
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function startCell(): string
    {
        return 'A1';
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                /** @var Sheet $sheet */
                $sheet = $event->sheet;
                /** UserDate */
                $sheet->append($this->userData(), 'A1');
                $sheet->autoSize();
            },
        ];
    }

    /**
     * @return array
     */
    public function userData(){
        $users = $this->data;
        $userData=[];
        foreach ($users as $row) {
            $user = [
                'id' => $row->id,
                'cost' => $row->cost,
                'user' => $row->user->userId,
                'cafeteria' => $row->cafeteria->name,
                'created_at' => $row->created_at,
            ];
            $userData[] = $user;
        }
        return $userData;
    }


    public function headings(): array
    {
        return [
            [
                "رقم الفاتورة",
                "السعر",
                "العضو",
                "الكافتريا",
                "التاريخ"
            ]
        ];
    }
}
