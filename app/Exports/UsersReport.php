<?php

namespace App\Exports;

use App\Models\RelationType;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithEvents;
use \Maatwebsite\Excel\Sheet;

class UsersReport implements WithHeadings, WithCustomStartCell, WithEvents
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
        return 'A2';
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
                'userId' => $row->userId,
                'name' => $row->name,
                'code' => $row->code,
                'balance' => $row->balance,
            ];
            $userData[] = $user;
        }
        return $userData;
    }


    public function headings(): array
    {
        return [
            [
                "الرقم التعريفي",
                "الاسم",
                "الكود",
                "الرصيد"
            ]
        ];
    }
}
