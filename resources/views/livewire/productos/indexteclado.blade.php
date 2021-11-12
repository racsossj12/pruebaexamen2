<div>
    <a href="{{route('crear')}}" type="button" class="mb-3  float-right btn btn-dark "  data-toggle="tooltip" data-placement="right" title="Crear">Crear</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Foto</th>
            <th scope="col">Nombre</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Precio</th>
            <th >acciones</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
            <tr>
                <th scope="row">{{$producto->id}}</th>
                <td></td>
                <td>{{$producto->nombre}}</td>
                <td>{{$producto->cantidad}}</td>
                <td>{{$producto->precio}}</td>
                <td>




                    <a href="{{route('delete',$producto) }}"  data-toggle="tooltip" data-placement="right" title="Eliminar"  class="btn btn-danger btn-sm"> <i class="fa fa-blender"></i></a>
                </td>
              </tr>

            @endforeach

        </tbody>
      </table>

      {{$productos->links()}}
</div>
