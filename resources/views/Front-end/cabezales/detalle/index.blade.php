@extends('front-end.template')


@section('content')

    {{--  Seccion de CABEZALES LISTOS PARA TRABAJAR  --}}

    <section class="block">
        <div class="container">
            <div class="row">
                <div class="col-md-12">	
                    <div class="row">
                        <div class="col-md-9 column">                               
                            <div class="vehiculs-sec">
                                <div class="vehiculs-list">
    
                                    <div class="vehiculs-content">                                            
                                        <div class="row">
    
                                            <div class="heading4">
                                                <h2>Cabezales reciente ingreso</h2>
                                                {{--  <span><h4>Los cabeales reciente ingreso  entraron en un rango de 6 meses y no han trabajado en Guatemala estan listos para trabajar</h4></span>  --}}
                                            </div>
                                        
                                            @foreach ($predios as $predio)

                                            <div class="col-md-4 col-sm-6  col-xs-12">
    
                                                <div class="vehiculs-box">
                                                    <div class="vehiculs-thumb">
                                                        <img src="{{ asset('storage/predio/' . $predio->files[0]->url) }}" alt="" /> 
                                                        <span class="spn-status"> {{ $predio->condicion }}</span>
                                                        <span class="spn-save"> <i class="ti ti-heart"></i> </span>                                        
                                                        <div class="user-preview">
                                                            <a class="col" href="">
                                                                <img alt="Camilė" class="avatar avatar-small" src="{{ asset('/storage/imagesUser/' . $predio->user->image) }}" title="Camilė">
                                                            </a> 
                                                        </div>
                                                        <a class="proeprty-sh-more" href="{{ route('detalle-cabezal-reciente-ingreso', $predio->id) }}"><i class="fa fa-angle-double-right"> </i><i class="fa fa-angle-double-right"> </i></a>
                                                
                                                    </div>
                                                    <h3><a >{{ $predio->titulo }}</a></h3>
                                                    <span class="price">Q{{ $predio->precio }}</span>
                                                </div> 
                                            </div>

                                            @endforeach
                                        
                                        </div>
                                        
                                        <ul class="pagination">
                                            <li class="disabled"><a href="#" title=""><span>NEXT</span></a></li>
                                            <li><a href="#" title="">1</a></li>
                                            <li class="active"><a href="#" title="">2</a></li>
                                            <li><a href="#" title="">3</a></li>
                                            <li><a href="#" title=""><span>PREV</span></a></li>
                                        </ul>
                                    
                                    </div>
                                </div><!-- Blog Post -->
                            </div>
                            <!-- Blog POst Sec -->
                        </div>
                        <aside class="col-md-3 column">
                            <div class="search_widget widget">
                                <div class="heading2">
                                    <h3>Buscar Cabezal</h3>
                                </div>
                                <div class="search-form"> 
                                    <form action="vehiculs.html"  method="get" class="form-inline">   
                                        <div class="search-form-content">
                                            <div class="search-form-field">  
                                                <div class="form-group col-md-12">
                                                    <div class="label-select">
                                                        <select class="form-control" name="s_location">
                                                            <option>Any Manufacturer</option>
                                                            <option>Audi</option>
                                                            <option>Mercedes-Benz</option>
                                                            <option>BMW</option>
                                                            <option>Lexus</option>
                                                            <option>Lincoln</option>
                                                            <option>Ford</option>
                                                            <option>Fiat</option>
                                                            <option>Dodge</option>
                                                        </select>
                                                    </div>
                                                </div>
    
                                                <div class="form-group col-md-12">
                                                    <div class="label-select">  
                                                        <select class="form-control" name="anymodule">
                                                            <option>Any Model </option>
                                                            <option value="1">R8</option>
                                                            <option value="2">S500</option>
                                                            <option value="3">540i</option>
                                                            <option value="4">RX300</option>
                                                            <option value="5">Navigator</option>
                                                            <option value="6">Taurus</option>
                                                            <option value="7">Doblo</option>
                                                            <option value="8">Viper</option>
                                                        </select>
                                                    </div>
                                                </div>  
    
                                                <div class="form-group col-md-12">
                                                    <div class="label-select">
                                                        <select class="form-control" name="s_location"> 
                                                            <option>Any locations</option>
                                                            <option>Central New York</option>
                                                            <option>GreenVille</option>
                                                            <option>Long Island</option>
                                                            <option>New York City</option>
                                                            <option>West Side</option>
                                                        </select>
                                                    </div>
                                                </div>
    
                                                <div class="form-group col-md-12">
                                                    <div class="label-select"> 
                                                        <select class="form-control" name="s_statu">
                                                            <option>Any Status </option>
                                                            <option value="damaged">Damaged</option>
                                                            <option value="new">New</option>
                                                            <option value="semi-new">Semi-New</option>
                                                            <option value="used">Used</option>
                                                        </select>
                                                    </div>
                                                </div> 
    
                                                <div class="form-group col-md-12">
                                                    <span class="gprice-label">Price Range</span>
                                                    <input type="text" class="span2" value="" data-slider-min="0" 
                                                           data-slider-max="60000" data-slider-step="5" 
                                                           data-slider-value="[0,60000]" id="price-range" >
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <span class="garea-label">Mileage Range</span> 
                                                    <input type="text" class="span2" value="" data-slider-min="0" 
                                                           data-slider-max="60000" data-slider-step="5" 
                                                           data-slider-value="[50,60000]" id="vehicul-geo" >
                                                </div>                                            
                                            </div> 
                                        </div>
                                        <div class="search-form-submit">
                                            <button type="submit" class="btn-search">Search</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- Services Sec -->
                            </div>
                            <!-- Category Widget -->
                        </aside>
                    </div>
    
                </div>
            </div>
        </div>
    </section>

@endsection()
