<div>
    <div class="card mx-auto" style="width: 18rem;">

        <div class="card-body">
            <img style="width: 100px;height: 100px" src="{{Storage::disk('public')->url($producto->foto)}}" alt="">
          <h5 class="card-title">{{$producto->nombre}}</h5>
          <p class="card-text">Precio: {{$producto->precio}}</p>

          <a href="{{route('productos')}}" class="btn btn-secondary btn-sm">Regresar</a>

        </div>
      </div>
</div>
