@extends("layouts.main")
@section("content")
     <div class="continer text-center">
         <h1 class="mb-4">Грузоперевозки</h1>
         <div class="row justify-content-between">
            <ul class="list-group col d-inline-block">
                @foreach($shippingData as $item)
                <li  onclick="makeActive(this)" class="list-group-item" > {{$item->from}} | {{$item->to}}</li>
                @endforeach
                <a type="button" class="btn btn-primary mt-3 " href="/add">Добавить</a>
            </ul>
          
            <form class="col" d-inline-block method="post" action="/calculate" id="calculateForm">
             @csrf
            <div class="form-group  ">
                <h5> Рассчитать стоимость </h5>
                <p class="text-warning"> *Выберите маршрут из списка слева ! </p>
                <input type="hidden" name="_token" :value="csrf">
                <input type="text " value="" name="shipping" class="form-control-sm form-control d-inline-block" id="count" aria-describedby="emailHelp" placeholder="Выберите маршрут">
                <input type="text " value="" name="weight" class="form-control-sm form-control d-inline-block mt-2" id="countWeight" aria-describedby="emailHelp" placeholder="Вес груза в кг"> 
            </div>
            <p id="result" class="pt-2 text-success " > </p>
            <button type="subbmit" class="btn btn-primary me-1 mt-2" href="/login">Рассчитать</button>
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
             @enderror
           </form>

         </div>
    </div>
    @endsection

