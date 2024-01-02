<x-layouts.app>
    <div class="row">
         <div class="col-md-12">
             <h2>TAMBAH DATA KATALOG</h2>
         </div>
         <div class="col-md-12">
            <x-card.card>
                <x-card.body>
                    <form action="{{ url('admin/katalog/tambah') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <x-input.input
                                    label="Nama pohon" 
                                    name="nama_pohon"
                                    placeholder="Masukan nama pohon ..."
                                    type="text"
                                />
                                
                            </div>
                            <div class="col-md-6">
                                <x-input.input-default
                                    label="Foto" 
                                    field="foto"
                                    placeholder="Masukan nama pohon ..."
                                    type="file"
                                />
                            </div>
                            <div class="col-md-12">
                                <x-input.textarea
                                    label="Deskripsi" 
                                    field="deskripsi"
                                    placeholder="Masukan deskripsi katalog ..."
                                    type="textarea"
                                />
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary float-end mt-3">SIMPAN</button>
                            </div>
                        </div>
                    </form>
                </x-card.body>
            </x-card.card>
         </div>
    </div>
 </x-layouts.app>