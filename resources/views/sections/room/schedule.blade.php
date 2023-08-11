<div class="container-xxl py-5 py-5 d-flex justify-content-center">
    <div class="form-group text-center text-primary wow">
        <label for="datepicker">Selecione uma Data:</label>
        <div class="input-group" data-provide="datepicker">
            <input type="text" class="form-control text-center" id="datepicker" style="width: 50%;">
            <div class="input-group-addon">
                <span class="glyphicon glyphicon-th"></span>
            </div>
        </div>
        <div class="form-group py-5 text-center text-primary wow">
            <label for="horas">Horas:</label>
            <input type="number" class="number form-control text-center " value='0' id="horas" name="horas"
                min="0" max="{{ $hours }}">
        </div>
        <div class="container mt-2">
            <label for="datepicker">Selecione o horário:</label>
            <div class="container mt-2">
                @foreach ($arrHours as $hour)
                    <button type="button" class="btn btn-hours">{{ $hour }}</button>
                @endforeach

            </div>
        </div>

    </div>
</div>
