<div>
    <a href="{{route('crearU')}}" type="button" class="mb-3  float-right btn btn-dark "  data-toggle="tooltip" data-placement="right" title="Crear">Crear</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Foto</th>
            <th scope="col">Nombre</th>
            <th scope="col">Email</th>

            <th >acciones</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuarios)
            <tr>
                <th scope="row">{{$usuarios->id}}</th>
                <th>
                    <img style="width: 40px;height: 40px" src="{{Storage::disk('public')->url($usuarios->foto)}}" alt="">
                </th>
                <td></td>
                <td>{{$usuarios->nombre_usuario}}</td>
                <td>{{$usuarios->email}}</td>

                <td>




                    <a href="{{route('delete',$usuarios) }}"  data-toggle="tooltip" data-placement="right" title="Eliminar"  class="btn btn-danger btn-sm"> <i class="fa fa-blender"></i></a>
                   <a href="{{route('see',$usuarios) }}"  data-toggle="tooltip" data-placement="right" title="Ver"  class="btn btn-info btn-sm"> <i class="fa fa-address-card"></i></a>
                </td>
              </tr>

            @endforeach

        </tbody>
      </table>

      {{$usuarios->links()}}
</div>
