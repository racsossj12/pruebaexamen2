<div>
    <div class="card mx-auto" style="width: 18rem;">

        <div class="card-body">
          <h5 class="card-title">{{$producto->nombre}}</h5>
          <p class="card-text">Precio: {{$producto->precio}}</p>
          <button wire:click='eliminar' class="btn btn-primary btn-sm">Confirmar</button>
          <a href="{{route('productos')}}" class="btn btn-secondary btn-sm">Regresar</a>

        </div>
      </div>
</div>
