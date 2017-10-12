@extends('layouts.app')

@section('menu_dashboard', 'open active')
@section('title', 'Crea tu anuncio')
@section('title-description', 'Administración de los catalogos del sistema')

@section('content')
    <section class="section">
        {!! Form::open(['url' => '/store_product', 'method' => 'post']) !!}
            <div class="card card-block">
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label text-xs-right"> Título: </label>
                    <div class="col-sm-10">
                        {!! Form::text('title', '', ['class' => 'form-control boxed', 'placeholder' => '']); !!}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label text-xs-right"> Subtitulo: </label>
                    <div class="col-sm-10">
                        {!! Form::text('subtitle', '', ['class' => 'form-control boxed', 'placeholder' => '']); !!}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label text-xs-right"> Categoria: </label>
                    <div class="col-sm-10">
                        <select class="c-select form-control boxed" name="category">
                            <option selected>Selecciona la categoria del producto</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label text-xs-right"> Condición: </label>
                    <div class="col-sm-10">
                        <select class="c-select form-control boxed" name="condition">
                            <option selected>Selecciona la conficion o estado del producto</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label text-xs-right"> Descripción del Producto: </label>
                    <div class="col-sm-10">
                        <div class="wyswyg">
                            <div class="toolbar">
                                            <span class="ql-format-group">
                                                <select title="Size" class="ql-size">
                                                    <option value="10px">Small</option>
                                                    <option value="13px" selected>Normal</option>
                                                    <option value="18px">Large</option>
                                                    <option value="32px">Huge</option>
                                                </select>
                                            </span>
                                <span class="ql-format-group">
                                                <span title="Bold" class="ql-format-button ql-bold"></span>
                                                <span class="ql-format-separator"></span>
                                                <span title="Italic" class="ql-format-button ql-italic"></span>
                                                <span class="ql-format-separator"></span>
                                                <span title="Underline" class="ql-format-button ql-underline"></span>
                                                <span class="ql-format-separator"></span>
                                                <span title="Strikethrough" class="ql-format-button ql-strike"></span>
                                            </span>
                                <span class="ql-format-group">
                                                <select title="Text Color" class="ql-color">
                                                    <option value="rgb(0, 0, 0)" label="rgb(0, 0, 0)" selected></option>
                                                    <option value="rgb(230, 0, 0)" label="rgb(230, 0, 0)"></option>
                                                    <option value="rgb(255, 153, 0)" label="rgb(255, 153, 0)"></option>
                                                    <option value="rgb(255, 255, 0)" label="rgb(255, 255, 0)"></option>
                                                    <option value="rgb(0, 138, 0)" label="rgb(0, 138, 0)"></option>
                                                    <option value="rgb(0, 102, 204)" label="rgb(0, 102, 204)"></option>
                                                    <option value="rgb(153, 51, 255)" label="rgb(153, 51, 255)"></option>
                                                    <option value="rgb(255, 255, 255)" label="rgb(255, 255, 255)"></option>
                                                    <option value="rgb(250, 204, 204)" label="rgb(250, 204, 204)"></option>
                                                    <option value="rgb(255, 235, 204)" label="rgb(255, 235, 204)"></option>
                                                    <option value="rgb(255, 255, 204)" label="rgb(255, 255, 204)"></option>
                                                    <option value="rgb(204, 232, 204)" label="rgb(204, 232, 204)"></option>
                                                    <option value="rgb(204, 224, 245)" label="rgb(204, 224, 245)"></option>
                                                    <option value="rgb(235, 214, 255)" label="rgb(235, 214, 255)"></option>
                                                    <option value="rgb(187, 187, 187)" label="rgb(187, 187, 187)"></option>
                                                    <option value="rgb(240, 102, 102)" label="rgb(240, 102, 102)"></option>
                                                    <option value="rgb(255, 194, 102)" label="rgb(255, 194, 102)"></option>
                                                    <option value="rgb(255, 255, 102)" label="rgb(255, 255, 102)"></option>
                                                    <option value="rgb(102, 185, 102)" label="rgb(102, 185, 102)"></option>
                                                    <option value="rgb(102, 163, 224)" label="rgb(102, 163, 224)"></option>
                                                    <option value="rgb(194, 133, 255)" label="rgb(194, 133, 255)"></option>
                                                    <option value="rgb(136, 136, 136)" label="rgb(136, 136, 136)"></option>
                                                    <option value="rgb(161, 0, 0)" label="rgb(161, 0, 0)"></option>
                                                    <option value="rgb(178, 107, 0)" label="rgb(178, 107, 0)"></option>
                                                    <option value="rgb(178, 178, 0)" label="rgb(178, 178, 0)"></option>
                                                    <option value="rgb(0, 97, 0)" label="rgb(0, 97, 0)"></option>
                                                    <option value="rgb(0, 71, 178)" label="rgb(0, 71, 178)"></option>
                                                    <option value="rgb(107, 36, 178)" label="rgb(107, 36, 178)"></option>
                                                    <option value="rgb(68, 68, 68)" label="rgb(68, 68, 68)"></option>
                                                    <option value="rgb(92, 0, 0)" label="rgb(92, 0, 0)"></option>
                                                    <option value="rgb(102, 61, 0)" label="rgb(102, 61, 0)"></option>
                                                    <option value="rgb(102, 102, 0)" label="rgb(102, 102, 0)"></option>
                                                    <option value="rgb(0, 55, 0)" label="rgb(0, 55, 0)"></option>
                                                    <option value="rgb(0, 41, 102)" label="rgb(0, 41, 102)"></option>
                                                    <option value="rgb(61, 20, 102)" label="rgb(61, 20, 102)"></option>
                                                </select>
                                                <span class="ql-format-separator"></span>
                                                <select title="Background Color" class="ql-background">
                                                    <option value="rgb(0, 0, 0)" label="rgb(0, 0, 0)"></option>
                                                    <option value="rgb(230, 0, 0)" label="rgb(230, 0, 0)"></option>
                                                    <option value="rgb(255, 153, 0)" label="rgb(255, 153, 0)"></option>
                                                    <option value="rgb(255, 255, 0)" label="rgb(255, 255, 0)"></option>
                                                    <option value="rgb(0, 138, 0)" label="rgb(0, 138, 0)"></option>
                                                    <option value="rgb(0, 102, 204)" label="rgb(0, 102, 204)"></option>
                                                    <option value="rgb(153, 51, 255)" label="rgb(153, 51, 255)"></option>
                                                    <option value="rgb(255, 255, 255)" label="rgb(255, 255, 255)" selected></option>
                                                    <option value="rgb(250, 204, 204)" label="rgb(250, 204, 204)"></option>
                                                    <option value="rgb(255, 235, 204)" label="rgb(255, 235, 204)"></option>
                                                    <option value="rgb(255, 255, 204)" label="rgb(255, 255, 204)"></option>
                                                    <option value="rgb(204, 232, 204)" label="rgb(204, 232, 204)"></option>
                                                    <option value="rgb(204, 224, 245)" label="rgb(204, 224, 245)"></option>
                                                    <option value="rgb(235, 214, 255)" label="rgb(235, 214, 255)"></option>
                                                    <option value="rgb(187, 187, 187)" label="rgb(187, 187, 187)"></option>
                                                    <option value="rgb(240, 102, 102)" label="rgb(240, 102, 102)"></option>
                                                    <option value="rgb(255, 194, 102)" label="rgb(255, 194, 102)"></option>
                                                    <option value="rgb(255, 255, 102)" label="rgb(255, 255, 102)"></option>
                                                    <option value="rgb(102, 185, 102)" label="rgb(102, 185, 102)"></option>
                                                    <option value="rgb(102, 163, 224)" label="rgb(102, 163, 224)"></option>
                                                    <option value="rgb(194, 133, 255)" label="rgb(194, 133, 255)"></option>
                                                    <option value="rgb(136, 136, 136)" label="rgb(136, 136, 136)"></option>
                                                    <option value="rgb(161, 0, 0)" label="rgb(161, 0, 0)"></option>
                                                    <option value="rgb(178, 107, 0)" label="rgb(178, 107, 0)"></option>
                                                    <option value="rgb(178, 178, 0)" label="rgb(178, 178, 0)"></option>
                                                    <option value="rgb(0, 97, 0)" label="rgb(0, 97, 0)"></option>
                                                    <option value="rgb(0, 71, 178)" label="rgb(0, 71, 178)"></option>
                                                    <option value="rgb(107, 36, 178)" label="rgb(107, 36, 178)"></option>
                                                    <option value="rgb(68, 68, 68)" label="rgb(68, 68, 68)"></option>
                                                    <option value="rgb(92, 0, 0)" label="rgb(92, 0, 0)"></option>
                                                    <option value="rgb(102, 61, 0)" label="rgb(102, 61, 0)"></option>
                                                    <option value="rgb(102, 102, 0)" label="rgb(102, 102, 0)"></option>
                                                    <option value="rgb(0, 55, 0)" label="rgb(0, 55, 0)"></option>
                                                    <option value="rgb(0, 41, 102)" label="rgb(0, 41, 102)"></option>
                                                    <option value="rgb(61, 20, 102)" label="rgb(61, 20, 102)"></option>
                                                </select>
                                            </span>
                                <span class="ql-format-group">
                                                <span title="List" class="ql-format-button ql-list"></span>
                                                <span class="ql-format-separator"></span>
                                                <span title="Bullet" class="ql-format-button ql-bullet"></span>
                                                <span class="ql-format-separator"></span>
                                                <select title="Text Alignment" class="ql-align">
                                                    <option value="left" label="Left" selected></option>
                                                    <option value="center" label="Center"></option>
                                                    <option value="right" label="Right"></option>
                                                    <option value="justify" label="Justify"></option>
                                                </select>
                                            </span>
                                <span class="ql-format-group">
                                                <span title="Link" class="ql-format-button ql-link"></span>
                                                <span class="ql-format-separator"></span>
                                                <button type="button" title="Image" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#modal-media">
                                                    <i class="fa fa-image"></i> Media </button>
                                            </span>
                                <span class="ql-format-group"> </span>
                            </div>
                            <!-- Create the editor container -->
                            <div class="editor"> Describe el producto que estas vendiendo </div>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10 col-sm-offset-2">
                        {!! Form::submit('Publicar', ['class' => 'btn btn-primary']); !!}
                    </div>
                </div>
            </div>
        {!! Form::close() !!}


    </section>
@endsection