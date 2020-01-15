@extends('DashboardModule::dashboard.index')

@section('content')
    <div class="content-wrapper ">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        @include('DashboardModule::partials.alerts')

                        <h1 class="card-title">Dodawanie nowego pracownika</h1>
                        <form method="POST" action="{{ route('NewWorkerModule::new-worker.send') }}">
                            @csrf
                            <h3>Osoba zgłaszająca</h3>
                            <div class="form-group">
                                <label for="reporting_name">Imię i nazwisko<span class="required">*</span></label>
                                <input type="text" class="form-control" name="reporting_name"required>
                            </div>
                            <div class="form-group">
                                <label for="reporting_mail">E-mail<span class="required">*</span></label>
                                <input type="email" class="form-control" name="reporting_mail" required>
                            </div>
                            <h3>Dane ogólne pracownika</h3>
                            <div class="form-group">
                                <label for="name">Imię i nazwisko<span class="required">*</span></label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="position">Stanowisko<span class="required">*</span></label>
                                <input type="text" class="form-control" name="position" required>
                            </div>
                            <div class="form-group">
                                <label for="position_eng">Stanowisko po angielsku<span class="required">*</span></label>
                                <input type="text" class="form-control" name="position_eng" required>
                            </div>
                            <div class="form-group">
                                <label for="start_date">Data rozpoczęcia pracy<span class="required">*</span></label>
                                <input type="date" class="form-control" name="start_date" placeholder="dd.mm.rrrr" required>
                            </div>
                            <div class="form-group">
                                <label for="phone_mobile">Numer telefonu</label>
                                <input type="number" min="1" minlength="9" class="form-control" name="phone_mobile">
                            </div>
                            <div class="form-group">
                                <label for="phone">Numer telefonu stacjonarnego</label>
                                <input type="number"  min="1" minlength="9" class="form-control" name="phone">
                            </div>
                            <div class="form-group">
                                <label for="company">Spółka<span class="required">*</span></label>
                                <select name="company" class="form-control company" required>
                                    <option value="" selected disabled>Wybierz spółkę</option>
                                    <option value="Zdrojowa Construction Sp. Z o.o.">Zdrojowa Construction Sp. Z o.o.</option>
                                    <option value="Zdrojowa Invest&amp;Hotels Sp. z o.o.">Zdrojowa Invest&amp;Hotels Sp. z o.o.</option>
                                    <option value="Zdrojowa Hotels Sp. z o.o.">Zdrojowa Hotels Sp. z o.o.</option>
                                    <option value="Marine Hotel*****&amp;Ultra Marine">Marine Hotel*****&amp;Ultra Marine</option>
                                    <option value="Diune Hotel*****&amp;Resort">Diune Hotel*****&amp;Resort</option>
                                    <option value="Sand Hotel****">Sand Hotel****</option>
                                    <option value="Jantar Hotel***&amp;SPA">Jantar Hotel***&amp;SPA</option>
                                    <option value="Boulevard Ustronie Morskie">Boulevard Ustronie Morskie</option>
                                    <option value="Baltic Park Molo Apartments">Baltic Park Molo Apartments</option>
                                    <option value="Baltic Park Fort">Baltic Park Fort</option>
                                    <option value="Baltic Park Molo Aquapark">Baltic Park Molo Aquapark</option>
                                    <option value="Cristal Resort Szklarska Poręba">Cristal Resort Szklarska Poręba</option>
                                    <option value="Vacation Club">Vacation Club</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="domain">Domena dla adresu email<span class="required">*</span></label>
                                <select name="domain" class="form-control domain" required>
                                    <option value="" selected disabled>Wybierz domenę</option>
                                    <option value="balticpark-aquapark.pl">balticpark-aquapark.pl</option>
                                    <option value="balticpark-fort.pl">balticpark-fort.pl</option>
                                    <option value="balticpark-molo.pl">balticpark-molo.pl</option>
                                    <option value="blvd.pl">blvd.pl</option>
                                    <option value="marinehotel.pl">marinehotel.pl</option>
                                    <option value="sandhotel.pl">sandhotel.pl</option>
                                    <option value="zdrojowahotels.pl">zdrojowahotels.pl</option>
                                    <option value="zdrojowainvest.pl">zdrojowainvest.pl</option>
                                    <option value="jantarspa.pl">jantarspa.pl</option>
                                    <option value="vacationclub.pl">vacationclub.pl</option>
                                </select>
                            </div>
                            <h3>Sprzęt</h3>
                            <div class="form-group">
                                <div class="form-check">
                                    <label class="form-check-label" for="laptop">
                                        <input class="form-check-input" type="checkbox" name="laptop" id="laptop" value="on">
                                        <i class="input-helper"></i>Laptop
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="mouse">
                                        <input class="form-check-input" type="checkbox" name="mouse" value="on" id="mouse">
                                        <i class="input-helper"></i>Myszka
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="monitor">
                                        <input class="form-check-input" type="checkbox" value="on" name="monitor" id="monitor">
                                        <i class="input-helper"></i>Monitor
                                    </label>
                                </div>
                                <div class="form-check" id="monitor_size">
                                    <label class="form-check-label" for="monitor_size">Rozmiar<span class="required">*</span></label>
                                    <select name="monitor_size" class="form-control monitor_size" >
                                        <option value="" selected disabled>Wybierz</option>
                                        <option value="24'">24'</option>
                                        <option value="25'">25'</option>
                                        <option value="27'">27'</option>
                                    </select>
                                </div>

                                <div class="form-check">
                                    <label class="form-check-label" for="keyboard">
                                        <input class="form-check-input" type="checkbox" name="keyboard" value="on" id="keyboard">
                                        <i class="input-helper"></i>Klawiatura
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="dock-station">
                                        <input class="form-check-input" type="checkbox" value="on" name="dock-station" id="dock-station">
                                        <i class="input-helper"></i>Stacja dokująca
                                    </label>
                                </div>
                            </div>
                                <div class="form-group">
                                    <label class="form-check-label" for="phone_device">Telefon<span class="required">*</span></label>
                                    <select name="phone_device" class="form-control phone_device" required>
                                        <option value="" selected disabled>Wybierz</option>
                                        <option value="Bez telefonu">Bez telefonu</option>
                                        <option value="Telefon z kartą sim">Telefon z kartą sim</option>
                                        <option value="Karta Sim">Karta sim</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="other_devices">Inny sprzęt elektroniczny</label>
                                    <input type="text" class="form-control" name="other_devices">
                                </div>
                            <h3>Różne</h3>
                            <div class="form-group">
                                <label for="comments">Uwagi</label>
                                <textarea class="form-control" name="comments"></textarea>
                            </div>
                            <button type="submit" class="float-right mt-2 btn btn-primary mr-2">Wyślij</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('stylesheets')
    <link rel="stylesheet" href="{{mix('vendor/css/NewWorkerModule.css')}}">
@endsection

@section('javascripts')
    <script src="{{mix('vendor/js/NewWorkerModule.js')}}"></script>
@endsection
