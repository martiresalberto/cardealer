@extends('front-end.template')


@section('content')

    <section class="block">
        <div class="container">

            <div class="heading4">
                <h2>Enviar mensaje</h2>
                <h4>Que cabezal buscas?</h4>
            </div>
    
            <div class="contact-form">
                <form>
                    <div class="row">
                        <div class="col-md-12" style="padding-right: 20px">
                            <i class="fas fa-pencil-alt"></i>
                            <textarea placeholder="Message" style="border: black solid 2px;"></textarea>
                        </div>
                        <div class="col-md-12">
                            <button class="flat-btn" type="submit">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </section>

@endsection()
