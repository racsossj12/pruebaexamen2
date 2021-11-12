<div>


<form wire:submit.prevent="crear">
        <div class="row">

            <div class="col-6 bg=dark mx-auto">

                <div class="form-group">
                    <label >Foto</label>
                    <input wire:model="producto.foto" type="text" class="form-control">


                  </div>
                  <div class="form-group">
                    <label>Nombre</label>
                    <input wire:model="producto.nombre" type="text" class="form-control" >
                    @error('producto.nombre')
                    <spam class="text-danger">{{$message}}</spam>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label>Cantidad</label>
                    <input wire:model="producto.cantidad" type="text" class="form-control" >
                    @error('producto.cantidad')
                    <spam class="text-danger">{{$message}}</spam>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label>Precio</label>
                    <input wire:model="producto.precio" type="text" class="form-control" >
                  </div>
                  @error('producto.precio')
                  <spam class="text-danger">{{$message}}</spam>
                  @enderror
                  <div></div>
                  <button wire:click="crear"  class="btn btn-primary" >Guardar</button>

            </div>

        </div>
        </form>

</div>
