<div>
    <form wire:submit.prevent="crear2">
        <div class="row">

            <div class="col-5">
                <img style="width: 200px;heigh: 200px;" src="{{$foto!=null ? $foto->temporaryUrl() : Storage::disk('public')->url('images/teclados/default2.jpg') }}" alt="">

                <div class="mb-3">
                    <label for="formFile" class="form-label">Subir imagen </label>
                    <input wire:model="foto" class="form-control" type="file" id="formFile">


                  </div>
                  @error('foto')
                  <spam class="text-danger">{{$message}}</spam>
                  @enderror
            </div>

          <div class="col-7">



            <div class="col-6 bg=dark mx-auto">


                  <div class="form-group">
                    <label>Nombre</label>
                    <input wire:model="usuarios.nombre_usuario" type="text" class="form-control" >
                    @error('usuarios.nombre_usuario')
                    <spam class="text-danger">{{$message}}</spam>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label>email</label>
                    <input wire:model="usuarios.email" type="text" class="form-control" >
                    @error('usuarios.email')
                    <spam class="text-danger">{{$message}}</spam>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label>password</label>
                    <input wire:model="usuarios.password" type="text" class="form-control" >
                  </div>
                  @error('usuarios.password')
                  <spam class="text-danger">{{$message}}</spam>
                  @enderror
                  <div></div>
                  <button wire:click="crear2"  class="btn btn-primary" >Guardar</button>

            </div>

        </div>
        </form>

</div>
