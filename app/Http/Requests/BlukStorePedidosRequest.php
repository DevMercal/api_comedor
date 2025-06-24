<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class BlukStorePedidosRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            '*.numeroPedido' => ['required', 'integer'],
            '*.metodoPagoId' => ['required', 'integer'],
            '*.referencia' => ['required', 'integer'],
            '*.montoTotal' => ['required', 'integer'],
            '*.idMenu' => ['required', 'integer'],
            '*.idEmpleado' => ['required', 'integer']
        ];
    }

    protected function prepareForValidation()
    {   
        $now = Carbon::now();
        $data = [];
        foreach ($this->toArray() as $obj) {
            $obj['numero_pedido'] = $obj['numeroPedido'] ?? NULL;
            $obj['metodo_pago_id'] = $obj['metodoPagoId'] ?? NULL;
            $obj['monto_total'] = $obj['montoTotal'] ?? NULL;
            $obj['id_menu'] = $obj['idMenu'] ?? NULL;
            $obj['id_empleado'] = $obj['idEmpleado'] ?? NULL;
            $obj['created_at'] = $now;
            $obj['updated_at'] = $now;
            $data[] = $obj;
        }

        $this->merge($data);
    }
}
