<?php

namespace App\Exports;

use App\Proposta;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PropostasExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function headings(): array
    {
        return [
            'id',
            'cliente_id',
            'endereco_obra',
            'vl_total',
            'sinal',
            'qt_parcelas',
            'vl_parcelas',
            'dt_inicio_pagamento',
            'dt_parcelas',
            'arquivo',
            'status'
        ];
    }

    public function collection()
    {
        return Proposta::all();
    }
}
