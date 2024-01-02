<x-layouts.app>
    <div class="row">
         <div class="col-md-12">
             <h2>DATA EVENT</h2>
         </div>
         <div class="col-md-12">
            <x-card.card>
                <x-card.header> 
                    <x-button.btn url="{{ url('admin/katalog/tambah') }}" class="success" icon="add" title titles="Tambah Katalog" />
                </x-card.header>
                <x-card.body>
                   <x-table.table>
                        <x-table.thead>
                            <tr>
                                <x-table.th title="No." />
                                <x-table.th title="Nama Pohon" />
                                <x-table.th title="Foto" />
                                <x-table.th title="Deskripsi" />
                                <x-table.th title="Aksi" />
                            </tr>
                        </x-table.thead>
                        <x-table.tbody>
                            @foreach ($list as $item)
                                <tr>
                                    <x-table.td value="No." />
                                    <x-table.td value="Nama Pohon" />
                                    <x-table.td value="Foto" />
                                    <x-table.td value="Deskripsi" />
                                    <x-table.td-action>
                                        <x-button.btn url="{{ url('admin/katalog/edit') }}" class="warning" icon="visibility" />
                                        <x-button.btn url="{{ url('admin/katalog/edit') }}" class="primary" icon="edit" />
                                        <x-button.btn url="{{ url('admin/katalog/edit') }}" class="danger" icon="delete" />
                                    </x-table.td-action>
                                </tr>
                            @endforeach
                        </x-table.tbody>
                   </x-table.table>
                </x-card.body>
            </x-card.card>
         </div>
    </div>
 </x-layouts.app>