<div class="modal fade" id="userFormModal" tabindex="-1" aria-labelledby="userFormModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="userFormModalLabel">Actualitzar-<b>{{$contacte->username}}</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Tancar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('contacte.actualitzar',$contacte->id)}}" method="get" id="form-update-{{$contacte->id}}">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="nomcomplet" placeholder="Nom Complet *" value="{{ old('nomcomplet', $contacte->nomcomplet)}}" required/>
                                @error('nomcomplet')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="usuari" placeholder="Nom usuari *" value="{{ old('usuari', $contacte->username) }}"/>

                                @error('usuari')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="email" placeholder="E-mail *" value="{{ old('email', $contacte->email) }}"/>
                                @error('email')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="telefon" placeholder="Telèfon *" value="{{old('telefon')}}"/>
                                @error('telefon')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="button" class="btn btn-outline-secondary" id="close-form-btn-3">Tancar</button>
                        <button type="submit" id="btn-actualizar" class="btn btn-dark">Actualitzar</button>

                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
