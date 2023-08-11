<div class="container-xxl  py-5 d-flex justify-content-center">
    <div class="form-group text-center text-primary wow">
        <label for="datepicker">Selecione uma Data:</label>
        <div class="input-group" data-provide="datepicker">
            @csrf
            <input type="text" class="form-control text-center" value="{{ now()->format('d/m/y') }}" id="datepicker"
                name="{{ $id }}" style="width: 50%;">
            <div class="input-group-addon">
                <span class="glyphicon glyphicon-th"></span>
            </div>
        </div>
        <div class="form-group py-3 text-center text-primary wow">
            <label for="horas">Horas:</label>
            <input type="number" class="number form-control text-center " value='0' id="horas" name="horas"
                min="0" max="{{ $hours }}">
        </div>
        <div class="form-group py-3 text-center text-primary wow">
            <label for="horas">Quantidade de Convidados:</label>
            <input type="number" class="number form-control text-center " value='0' id="horas" name="horas"
                min="0" max="{{ $qtd_people }}">
        </div>


        <div class="container mt-2">
            <label for="datepicker">Selecione o horário:</label>
            @if ($hours === 0)
                <p class="text-danger mt-2">Nenhum horário disponível</p>
            @else
                <div class="container mt-2">
                    @foreach ($arrHours as $hour)
                        <button type="button" class="btn btn-hours">{{ $hour }}</button>
                    @endforeach
                </div>
            @endif
        </div>

    </div>
</div>
