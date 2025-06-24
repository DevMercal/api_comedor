<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorepedidosRequest extends FormRequest
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
            'numeroPedido' => ['required', 'integer'],
            'metodoPagoId' => ['required', 'integer'],
            'referencia' => ['required', 'integer'],
            'montoTotal' => ['required', 'integer'],
            'idMenu' => ['required', 'integer'],
            'idEmpleado' => ['required', 'integer']
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'numero_pedido' => $this->numeroPedido,
            'metodo_pago_id' => $this->metodoPagoId,
            'monto_total' => $this->montoTotal,
            'id_menu' => $this->idMenu,
            'id_empleado' => $this->idEmpleado
        ]);
    }
}
