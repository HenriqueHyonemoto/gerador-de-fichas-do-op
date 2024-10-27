@extends('layouts.main')

@section('title', 'Criar Personagem')

@section('content')

<video autoplay muted loop id="background-video">
    <source src="../video/VideoBack.mp4" type="video/mp4">
</video>

<div id="search-container " class="col-md-12">
    <div class="container col-md-8">
        <div class="col-md-12 row">
            <div class="blackbox gy_border col-md-8">
                <div class="topfade">
                    <p>Atributos</p>
                </div>
                <div class="pad">
                    <div class="col-md-12 row">

                        <div class="col-md-12 row" style="padding-left:0;padding-right:0">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <form action="/events" method="POST" enctype="multipart/form-data">
                                    @csrf
                                        <label for="title">Pesonagem </label>
                                        <input type="text" class="form-control edt" id="nome_personagem" name="nome_personagem" placeholder="Nome do Personagem">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Jogador </label>
                                    <input type="text" class="form-control edt" id="nome_jogador" name="nome_jogador" placeholder="Seu Nome">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label for="image">Imagem do Personagem <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-image" viewBox="0 0 16 16">
                                    <path d="M6.502 7a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                    <path d="M14 14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5V14zM4 1a1 1 0 0 0-1 1v10l2.224-2.224a.5.5 0 0 1 .61-.075L8 11l2.157-3.02a.5.5 0 0 1 .76-.063L13 10V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4z" />
                                </svg></label>
                            <input class="form-control" type="file" id="image" name="image">
                        </div>

                        <div class="col-md-12 row justify-content-between" style="padding-left:0;padding-right:0">
                            <div class="form-group col-md-2">
                                <label for="title">Agilidade </label>
                                <input type="number" class="form-control edt" id="agi" name="agi" placeholder="0">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="title">Intelecto</label>
                                <input type="text" class="form-control edt" id="int" name="int" placeholder="0">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="title">Vigor</label>
                                <input type="text" class="form-control edt" id="vig" name="vig" placeholder="0">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="title">Presença</label>
                                <input type="text" class="form-control edt" id="pre" name="pre" placeholder="0">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="title">Força</label>
                                <input type="text" class="form-control edt" id="for" name="for" placeholder="0">
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Historia</label>
                                <textarea name="lore" id="lore" class="form-control" placeholder="Historia do personagem" rows="4" cols="50" maxlength="1300"></textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="title">Origem</label>
                                        <input type="text" class="form-control edt" id="origem" name="origem" placeholder="Origem do Personagem">
                                    </div>
                                </div>

                        </div>

                        <div class="col-md-12">
                            <label for="title">Classe</label>
                            <select class="form-control" aria-label="Default select example" id="classe" name="classe">
                                <option selected disabled>Selecione sua classe</option>
                                <option class="form-control" value="Mundano">Mundano</option>
                                <option class="form-control" value="Combatente">Combatente</option>
                                <option class="form-control" value="Especialista">Especialista</option>
                                <option class="form-control" value="Ocultista">Ocultista</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="title">NEX</label>
                                <input type="number" class="form-control edt" id="nex" name="nex" placeholder="0">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="title">PE/Rodada</label>
                                <input type="number" class="form-control edt" id="maxpe" name="maxpe" placeholder="0">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">Deslocamento</label>
                                <input type="text" class="form-control edt" id="desl" name="desl" placeholder="0">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">Pontos de Vida (PV) <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                    </svg></label>
                                <input type="text" class="form-control edt" id="pv" name="pv" placeholder="0">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">Pontos de Esforço (PE)</label>
                                <input type="text" class="form-control edt" id="pe" name="pe" placeholder="0">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">Defesa <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shield-fill-plus" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm-.5 5a.5.5 0 0 1 1 0v1.5H10a.5.5 0 0 1 0 1H8.5V9a.5.5 0 0 1-1 0V7.5H6a.5.5 0 0 1 0-1h1.5V5z" />
                                    </svg></label>
                                <input type="text" class="form-control edt" id="def" name="def" placeholder="0">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">Sanidade (SAN)</label>
                                <input type="text" class="form-control edt" id="san" name="san" placeholder="0">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Proteções</label>
                                <input type="text" class="form-control edt" id="prot" name="prot" placeholder="Suas Proteções">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Resistências</label>
                                <input type="text" class="form-control edt" id="res" name="res" placeholder="Suas Resistências">
                            </div>
                        </div>
                    </div>
                </div>





            </div>

            <div class="blackbox gy_border col-md-4 ">
                <div class="topfade">
                    <p>Perícias</p>
                </div>
                <div class="col-md-12 row">
                    <img src="../img/logoordem.png" style="width:500px; justify-content:center" class="justify-content-center">
                    <div class="form-group">
                        <div class="form-group">
                            <input type="checkbox" name="pericias[]" value="Acrobacia" class="form-check-input"> Acrobacia
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="pericias[]" value="Adestramento" class="form-check-input"> Adestramento
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="pericias[]" value="Artes" class="form-check-input"> Artes
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="pericias[]" value="Atletismo" class="form-check-input"> Atletismo
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="pericias[]" value="Atualidades" class="form-check-input"> Atualidades
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="pericias[]" value="Ciencias" class="form-check-input"> Crime
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="pericias[]" value="Diplomacia" class="form-check-input"> Diplomacia
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="pericias[]" value="Enganação" class="form-check-input"> Enganação
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="pericias[]" value="Fortitude" class="form-check-input"> Fortitude
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="pericias[]" value="Furtividade" class="form-check-input"> Furtividade
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="pericias[]" value="Iniciativa" class="form-check-input"> Iniciativa
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="pericias[]" value="Intimidação" class="form-check-input"> Intimidação
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="pericias[]" value="Intuição" class="form-check-input"> Intuição
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="pericias[]" value="Investigação" class="form-check-input"> Investigação
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="pericias[]" value="Luta" class="form-check-input"> Luta
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="pericias[]" value="Medicina" class="form-check-input"> Medicina
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="pericias[]" value="Ocultismo" class="form-check-input"> Ocultismo
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="pericias[]" value="Percepcao" class="form-check-input"> Percepção
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="pericias[]" value="Pilotagem" class="form-check-input"> Pilotagem
                        </div>

                        <div class="form-group">
                            <input type="checkbox" name="pericias[]" value="Pontaria" class="form-check-input"> Pontaria
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="pericias[]" value="Profissão" class="form-check-input"> Profissão
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="pericias[]" value="Reflexos" class="form-check-input"> Reflexos
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="pericias[]" value="Religião" class="form-check-input"> Religião
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="pericias[]" value="Sobrevivencia" class="form-check-input"> Sobrevivencia
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="pericias[]" value="Tatica" class="form-check-input"> Tática
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="pericias[]" value="Tecnologia" class="form-check-input"> Tecnologia
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="pericias[]" value="Vontade" class="form-check-input"> Vontade
                        </div>

                    </div>
                </div>

            </div>
            <div class="blackbox gy_border col-md-12" style="margin-top:0">
            <div class="topfade">
                    <p>Ataques</p>
                </div>
                <div class="col-md-12 row">
                    <div class="form-group col-md-3 " style="margin-bottom:4px">
                        <div >
                            <label for="dt">DT de Rituais</label>
                            <input type="number" class="form-control edt" id="dt" name="dt" placeholder="0">
                                </div>
                        </div>
                        <div class="form-group">
                        <label for="espacos">Ataques</label>
                        <textarea name="ataques" id="ataques" class="form-control" placeholder="Seus Ataques" rows="4" cols="50" maxlength="1300"></textarea>
                    </div>
                </div>
            </div>
            <div class="blackbox gy_border col-md-12" style="margin-top:0">
                <div class="topfade">
                    <p>Inventario</p>
                </div>
                <div class="col-md-12 row">
                <div class="form-group col-md-3 " style="margin-bottom:4px">
                        <div >
                            <label for="espacos">Espaços</label>
                            <input type="number" class="form-control edt col-md-3" id="espacos" name="espacos" placeholder="0">
                            </div>
                        </div>
                        
                        <div class="form-group">
                        <label for="espacos">Itens</label>
                        <textarea name="inv" id="inv" class="form-control" placeholder="Seus Itens" rows="4" cols="50" maxlength="1300"></textarea>
                    </div>

                </div>
            </div>

            <div class="col-md-12">
                <div class="col-md-12 d-flex align-items-center justify-content-end">
                    <input type="submit" class="btn b-primarytn" id="criar" value="Criar">
                </div>
            </div>

        </div>

        </form>
    </div>


</div>

</div>
</div>





@endsection