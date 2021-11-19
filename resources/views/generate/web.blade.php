@extends('layouts.app')
@section('content')
<style>
    label {
        background-color: #FFCF40;
        padding: 10px;
        display: block;
        border: 1px solid black;
        margin-bottom: 0 !important;
    }

    input,
    textarea {
        font-size: 15px;
        margin-top: 10px;
        margin-bottom: 5px;
        width: 100%;
        border: 1px solid #FFCF40;
        font-family: Lato;
    }

    .button {
        margin-top: 50px;
    }

    .generate {
        font-family: "Lato";
        font-weight: 600;
        font-size: 18px;
        padding: 20px;
        background-color: #FFCF40;
        /* color: white; */
        text-decoration: none;
    }

    .light-gray {
        color: rgb(165, 165, 165)
    }

    .row-image {
        max-width: 620px
    }

    .row-input {
        width: 480px;
        margin-left: 20px
    }

    .body {
        font-family: 'Times New Roman';
    }
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.9/cropper.js"
    integrity="sha512-oqBsjjSHWqkDx4UKoU+5IUZN2nW2qDp2GFSKw9+mcFm+ZywqfBKp79nfWmGPco2wzTWuE46XpjtCjZ9tFmI12g=="
    crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.9/cropper.css"
    integrity="sha512-949FvIQOibfhLTgmNws4F3DVlYz3FmCRRhJznR22hx76SKkcpZiVV5Kwo0iwK9L6BFuY+6mpdqB2+vDIGVuyHg=="
    crossorigin="anonymous" />

<body>
    <form action="{{ route('generate.offer') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container mb-5">
            <div class="row mb-5">
                <div class="row-image">
                    <div class="page">
                        <div class="header">
                            <img src="images/generate_logo.jpg" alt="" style="width:300px">
                            <p class="light-gray">55 Merrick Way Suite 402<br>Coral Gables, FL
                                33134<br>O:
                                (305) 809-7650</p>
                        </div>
                        <div class="body">
                            Dear JORGE I SANTANA & DONNA,
                            <br><br><br>
                            We have a client who is interested in buying a home in the
                            Shenandoah/Silver Bluff neighborhood<span class="text-1">, and we have visited the recently
                                available homes
                                and have exhausted all MLS options, but none have
                                quite matched their criteria. This could present <b>a great opportunity for you to find
                                    a buyer without months of marketing and the hassle of
                                    showings (as well as the costs that might be associated with both.)</b> We hope
                                you’ll take this letter into consideration!
                            </span><br><br>
                            <div class="text-2">
                                The Conforme's are looking for;<br>
                                <b>
                                    • A home over 2,000 sq. ft.<br>
                                    • 3 bedrooms but preferably 4<br>
                                    • Some Charm or curb appeal is preferable<br>
                                    • Room to add a pool</b>
                            </div>
                            <br><br>
                            <span class="text-3">If you have a home that even remotely meets the above criteria and
                                you’ve considered
                                selling, please
                                contact
                                us
                                immediately! <b>This family could have some flexibility in moving, but is truly looking
                                    for
                                    a quick
                                    closing, if
                                    possible.</b>
                                Additionally, if you are considering an UPWARD purchase in real estate soon, there is
                                quite
                                a bit of
                                data
                                showing us
                                that it may be as much as 10% more expensive next year than it is THIS year to make an
                                upward move
                                in the
                                Miami area for
                                single family homes. If you are on the fence about this, please give me a call so I can
                                get
                                you some
                                relevant
                                information.
                            </span>
                            <br><br>
                            <span class="text-4">
                                While we would certainly love to help you list your home for sale, please be assured
                                that
                                this is
                                NOT a ploy
                                to find new
                                listings, and is truly an effort to help match our buyers with a home that will suit
                                their
                                needs.
                                Please do
                                not hesitate
                                to call us. If your home is not something they would pursue, we guarantee that you will
                                not
                                be
                                contacted in
                                any other
                                way, unless requested. We look forward to hearing from you soon!
                            </span>
                            <br><br><br>
                            <span class="text-5"><b>Wesley Ulloa - LUXE Properties</b></span><br>
                            <span class="text-6">Direct - (305) 986-7041</span><br>
                            <span class="text-7">Email - wesley@luxeknows.com</span><br>
                            <span class="text-8">Website - www.AllMiamiHousesForSale.com or www.LUXEknows.com</span>
                        </div>
                    </div>
                </div>
                <div class="row-input">
                    <div>
                        <label for="page-1-img-1">Paragraph 1</label>
                        <textarea name="text_1" id="text-1" class="w-100"
                            rows="8">, and we have visited the recently available homes and have exhausted all MLS options, but none have quite matched their criteria. This could present <b>a great opportunity for you to find a buyer without months of marketing and the hassle of showings (as well as the costs that might be associated with both.)</b> We hope you’ll take this letter into consideration!</textarea>
                    </div>
                    <div>
                        <label for="page-1-img-1">Paragraph 2</label>
                        <textarea name="text_2" id="text-2" class="w-100" rows="6">The Conforme's are looking for;<br>
<b>
    • A home over 2,000 sq. ft.<br>
    • 3 bedrooms but preferably 4<br>
    • Some Charm or curb appeal is preferable<br>
    • Room to add a pool</b></textarea>
                    </div>
                    <div>
                        <label for="page-1-img-1">Paragraph 3</label>
                        <textarea name="text_3" id="text-3" class="w-100"
                            rows="8">If you have a home that even remotely meets the above criteria and you’ve considered selling, please contact us immediately! <b>This family could have some flexibility in moving, but is truly looking for a quick closing, if possible.</b> Additionally, if you are considering an UPWARD purchase in real estate soon, there is quite a bit of data showing us that it may be as much as 10% more expensive next year than it is THIS year to make an upward move in the Miami area for single family homes. If you are on the fence about this, please give me a call so I can get you some relevant information.</textarea>
                    </div>
                    <div>
                        <label for="page-1-img-1">Paragraph 4</label>
                        <textarea name="text_4" id="text-4" class="w-100"
                            rows="6">While we would certainly love to help you list your home for sale, please be assured that this is NOT a ploy to find new listings, and is truly an effort to help match our buyers with a home that will suit their needs. Please do not hesitate to call us. If your home is not something they would pursue, we guarantee that you will not be contacted in any other way, unless requested. We look forward to hearing from you soon!</textarea>
                    </div>
                    <div>
                        <label for="page-1-img-1">Footer</label>
                        <input type="text" name="text_5" id="text-5" value="<b>Wesley Ulloa - LUXE Properties</b>">
                        <input type="text" name="text_6" id="text-6" value="Direct - (305) 986-7041">
                        <input type="text" name="text_7" id="text-7" value="Email - wesley@luxeknows.com">
                        <input type="text" name="text_8" id="text-8"
                            value="Website - www.AllMiamiHousesForSale.com or www.LUXEknows.com">
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="row-image">
                    <div class="page">
                        <div class="header">
                            <img src="images/generate_logo.jpg" alt="" style="width:300px">
                            <p class="light-gray">55 Merrick Way Suite 402<br>Coral Gables, FL
                                33134<br>O:
                                (305) 809-7650</p>
                        </div>
                        <div class="body">
                            Estimado JORGE I SANTANA & DONNA,
                            <br><br><br>
                            En este momento tenemos un cliente que esta interesado en comprar una casa en el barrio
                            Shenandoah/Silver
                            Bluff. <span class="text-9">Hemos
                                visitado las casas que se encuentran disponibles dentro del barrio y buscando en el MLS
                                sin
                                embargo, ninguna
                                casa
                                coincide con los criterios establecidos. Esto es una gran oportunidad para ustedes como
                                dueños ya que
                                aumentan las
                                posibilidades de venderla sin tener la casa meses en el Mercado y sin pasar por la
                                molestia
                                de mostrar la
                                casa a futuros
                                compradores (sumando a esto el costo asociado). Esperamos que tomen en cuenta esta
                                carta.</span>
                            <br><br>
                            <div class="text-10">
                                La familia Conforme’s esta buscando:<br>
                                • A home over 2,000 sq. ft.<br>
                                • 3 bedrooms but preferably 4<br>
                                • Some Charm or curb appeal is preferable<br>
                                • Room to add a pool
                            </div>
                            <br>
                            <span class="text-11">
                                Si tiene alguna casa que se acerque a las características mencionadas anteriormente y ha
                                considerado vender,
                                por favor
                                contáctenos inmediatamente. Esta familia es flexible con la fecha de mudanza pero esta
                                buscando algo que
                                pueda
                                concretarse lo mas pronto posible. Además, si están considerando actualizar su viviendo
                                a un
                                espacio mas
                                amplio, tenemos
                                información que demuestra que habrá un aumento del 10% en los precios de casa
                                unifamiliares
                                en el área de
                                Miami el
                                próximo año. Si se encuentran interesados, por favor contáctenme para poder proveerles
                                información
                                relevante.
                            </span>
                            <br><br>
                            <span class="text-12">
                                Aunque sin duda nos encantaría ayudarlos a poner su casa en venta, por favor quiero que
                                entiendan que esto
                                no
                                es una
                                táctica para aumentar nuestra lista de inmobiliario. Eso realmente es un esfuerzo para
                                ayudar a nuestros
                                compradores a
                                encontrar su nuevo hogar. Por favor no dude en llamarnos. Si su casa no es algo que
                                calza
                                con las
                                características, le
                                garantizamos que no lo contactáramos, a menos que lo solicite. Quedamos atentos a su
                                respuesta.
                            </span>
                            <br><br><br>
                            <span class="text-5"><b>Wesley Ulloa - LUXE Properties</b></span><br>
                            <span class="text-6">Direct - (305) 986-7041</span><br>
                            <span class="text-7">Email - wesley@luxeknows.com</span><br>
                            <span class="text-8">Website - www.AllMiamiHousesForSale.com or www.LUXEknows.com
                        </div>
                    </div>
                </div>
                <div class="row-input">
                    <div class="">
                        <label for="page-1-img-1">Paragraph 1</label>
                        <textarea name="text_9" id="text-9"
                            rows="8">Hemos visitado las casas que se encuentran disponibles dentro del barrio y buscando en el MLS sin embargo, ninguna casa coincide con los criterios establecidos. Esto es una gran oportunidad para ustedes como dueños ya que aumentan las posibilidades de venderla sin tener la casa meses en el Mercado y sin pasar por la molestia de mostrar la casa a futuros compradores (sumando a esto el costo asociado). Esperamos que tomen en cuenta esta carta.</textarea>
                    </div>
                    <div class="">
                        <label for="page-1-img-1">Paragraph 2</label>
                        <textarea name="text_10" id="text-10" rows="6">La familia Conforme’s esta buscando:<br>
• A home over 2,000 sq. ft.<br>
• 3 bedrooms but preferably 4<br>
• Some Charm or curb appeal is preferable<br>
• Room to add a pool</textarea>
                    </div>
                    <div class="">
                        <div class="">
                            <label for="page-1-img-1">Paragraph 3</label>
                            <textarea name="text_11" id="text-11"
                                rows="6">Si tiene alguna casa que se acerque a las características mencionadas anteriormente y ha considerado vender, por favor contáctenos inmediatamente. Esta familia es flexible con la fecha de mudanza pero esta buscando algo que pueda concretarse lo mas pronto posible. Además, si están considerando actualizar su viviendo a un espacio mas amplio, tenemos información que demuestra que habrá un aumento del 10% en los precios de casa unifamiliares en el área de Miami el próximo año. Si se encuentran interesados, por favor contáctenme para poder proveerles información relevante.</textarea>
                        </div>
                        <div class="">
                            <label for="page-1-img-1">Paragraph 4</label>
                            <textarea name="text_12" id="text-12"
                                rows="6">Aunque sin duda nos encantaría ayudarlos a poner su casa en venta, por favor quiero que entiendan que esto no es una táctica para aumentar nuestra lista de inmobiliario. Eso realmente es un esfuerzo para ayudar a nuestros compradores a encontrar su nuevo hogar. Por favor no dude en llamarnos. Si su casa no es algo que calza con las características, le garantizamos que no lo contactáramos, a menos que lo solicite. Quedamos atentos a su respuesta.</textarea>
                        </div>
                        <div class="">
                            <label for=" page-1-img-1">Upload CSV</label>
                            <input type="file" id="file" name="file" required>
                        </div>
                        <div class="" style="margin-top:10px;">
                            <button type="submit" name="action" value="Generate"
                                class="generate w-100">DOWNLOAD</button>
                        </div>
                    </div>
                </div>
    </form>
</body>
<script>
    $("textarea,input").change(function(event) {
        var event_id = event.target.id;
        var text = $("#"+event_id).val();
        $('.'+event_id).html(text);
    });
</script>
@endsection