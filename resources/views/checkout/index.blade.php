@extends('layouts.app')

@section('title', 'Checkout')

@section('content')

    <!-- BREADCRUMB -->
    <div id="breadcrumb" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <h3 class="breadcrumb-header">Checkout</h3>
                    <ul class="breadcrumb-tree">
                        <li><a href="#">Home</a></li>
                        <li class="active">Checkout</li>
                    </ul>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /BREADCRUMB -->

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <div class="col-md-7">
                    <!-- Billing Details -->
                    <div class="billing-details">
                        <div class="section-title">
                            <h3 class="title">Información del Comprador</h3>
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="ci" placeholder="Documento de identidad">
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="first-name" placeholder="Nombres">
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="last-name" placeholder="Apellidos">
                        </div>
                        <div class="form-group">
                            <input class="input" type="email" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="address" placeholder="Dirección">
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="province" placeholder="Provincia">
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="city" placeholder="Ciudad">
                        </div>
                        <div class="form-group">
                            <input class="input" type="tel" name="tel" placeholder="Celular">
                        </div>
                        <div class="form-group">
                            <div class="input-checkbox">
                                <input type="checkbox" id="create-account">
                                <label for="create-account">
                                    <span></span>
                                    ¿Crear cuenta?
                                </label>
                                <div class="caption">
                                    <p>Recuerde crear una contraseña segura de mínimo 8 caracteres</p>
                                    <input class="input" type="password" name="password"
                                        placeholder="Escriba una contraseña">
                                    <input class="input" type="password" name="password"
                                        placeholder="Repita su contraseña">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Billing Details -->

                    <!-- Shiping Details -->
                    <div class="shiping-details">
                        <div class="section-title">
                            <h3 class="title">Enviar a otra Dirección</h3>
                        </div>
                        <div class="input-checkbox">
                            <input type="checkbox" id="shiping-address">
                            <label for="shiping-address">
                                <span></span>
                                ¿Seleccionar una dirección de envió diferente?
                            </label>
                            <div class="caption">
                                <div class="form-group">
                                    <input class="input" type="text" name="ci"
                                        placeholder="Documento de identidad">
                                </div>
                                <div class="form-group">
                                    <input class="input" type="text" name="first-name" placeholder="Nombres">
                                </div>
                                <div class="form-group">
                                    <input class="input" type="text" name="last-name" placeholder="Apellidos">
                                </div>
                                <div class="form-group">
                                    <input class="input" type="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input class="input" type="text" name="address" placeholder="Dirección">
                                </div>
                                <div class="form-group">
                                    <input class="input" type="text" name="province" placeholder="Provincia">
                                </div>
                                <div class="form-group">
                                    <input class="input" type="text" name="city" placeholder="Ciudad">
                                </div>
                                <div class="form-group">
                                    <input class="input" type="tel" name="tel" placeholder="Celular">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Shiping Details -->

                    <!-- Order notes -->
                    <div class="order-notes">
                        <textarea class="input" placeholder="Información adicional"></textarea>
                    </div>
                    <!-- /Order notes -->
                </div>

                <!-- Order Details -->
                <div class="col-md-5 order-details">
                    <div class="section-title text-center">
                        <h3 class="title">Tu Orden</h3>
                    </div>
                    <div class="order-summary">
                        <div class="order-col">
                            <div><strong>PRODUCTOS</strong></div>
                            <div><strong>TOTAL</strong></div>
                        </div>
                        <div class="order-products">
                            <div class="order-col">
                                <div>1x Product Name Goes Here</div>
                                <div>$980.00</div>
                            </div>
                            <div class="order-col">
                                <div>2x Product Name Goes Here</div>
                                <div>$980.00</div>
                            </div>
                        </div>
                        <div class="order-col">
                            <div>Envió</div>
                            <div><strong>GRATIS</strong></div>
                        </div>
                        <div class="order-col">
                            <div><strong>TOTAL</strong></div>
                            <div><strong class="order-total">$2940.00</strong></div>
                        </div>
                    </div>
                    <div class="payment-method">
                        <div class="input-radio">
                            <input type="radio" name="payment" id="payment-1">
                            <label for="payment-1">
                                <span></span>
                                Transferencia Bancaria
                            </label>
                            <div class="caption">
                                <p>Para transferencia bancaria enviar el comprobante de pago junto con su id de compra para
                                    validar la orden</p>
                            </div>
                        </div>
                        <div class="input-radio">
                            <input type="radio" name="payment" id="payment-2">
                            <label for="payment-2">
                                <span></span>
                                Payphone
                            </label>
                            <div class="caption">
                                <p>Realize el pago mediante PayPhone y reciba sus productos</p>
                            </div>
                        </div>
                        <div class="input-radio">
                            <input type="radio" name="payment" id="payment-3">
                            <label for="payment-3">
                                <span></span>
                                Retirar en la tienda
                            </label>
                            <div class="caption">
                                <p>Acérquese con su id de compra y retire sus productos en nuestra tienda física</p>
                            </div>
                        </div>
                    </div>
                    <div class="input-checkbox">
                        <input type="checkbox" id="terms">
                        <label for="terms">
                            <span></span>
                            Acepto todos los <a href="#">términos & condiciones</a>
                        </label>
                    </div>
                    <a href="#" class="primary-btn order-submit">Finalizar Pedido</a>
                </div>
                <!-- /Order Details -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->

@endsection
