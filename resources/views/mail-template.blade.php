<html>
<body style="font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif; color: #555; margin: 0;">
    <table style="width: 100%;">
        <tr>
            <td style="background-color: #16254c; padding: 20px;" align="center">
                <img src="{{ asset('vendor/img/NewWorkerModule/Nowy_Pracownik_Logo_Email.png') }}">
            </td>
        </tr>
    </table>
    <br>
    <br>
    <table style="width: 100%; max-width: 500px;" align="center">
        <tr>
            <td align="center"><h1>Nowy pracownik</h1></td>
        </tr>
        <tr>
            <td><h3>Osoba zgłaszająca</h3></td>
        </tr>
        <tr>
            <td>Imię i nazwisko: <strong>{{ $reportingName}}</strong></td>
        </tr>
        <tr>
            <td>E-mail:  <strong>{{ $reportingMail }}</strong></td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
        <tr>
            <td><h3>Dane ogólne pracownika</h3></td>
        </tr>
        <tr>
            <td>Imię i nazwisko: <strong>{{ $name }}</strong></td>
        </tr>
        <tr>
            <td>Stanowisko: <strong>{{ $position }}</strong></td>
        </tr>
        <tr>
            <td>Stanowisko po angielsku: <strong>{{ $positionEng }}</strong></td>
        </tr>
        <tr>
            <td>Data rozpoczęcia pracy: <strong>{{ $startDate }}</strong></td>
        </tr>
        @if($phoneMobile)
            <tr>
                <td>Numer telefonu: <strong>{{ $phoneMobile }}</strong></td>
            </tr>
        @endif
        @if($phone)
            <tr>
                <td>Numer telefonu stacjonarnego: <strong>{{ $phone }}</strong></td>
            </tr>
        @endif
        <tr>
            <td>Spółka: <strong>{{ $company }}</strong></td>
        </tr>
        <tr>
            <td>Domena dla adresu e-mail: <strong>{{ $domain }}</strong></td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
        <tr>
            <td><h3>Sprzęt</h3></td>
        </tr>
        <tr>
            <td>
                <ul>
                    @if($laptop)
                        <li>Laptop</li>
                    @endif
                    @if($mouse)
                        <li>Myszka</li>
                    @endif
                    @if($monitor)
                        <li>Monitor {{ $monitor }}</li>
                    @endif
                    @if($keyboard)
                        <li>Klawiatura</li>
                    @endif
                    @if($dockStation))
                        <li>Stacja dokująca</li>
                    @endif
                    <li>{{ $phoneDevice }}</li>
                </ul>
            </td>
        </tr>
        @if($otherDevices))
            <tr>
                <td>Inny sprzęt elektroniczny: <strong>{{ $otherDevices }}</strong></td>
            </tr>
        @endif
        @if(!empty($comments))
            <tr>
                <td><br></td>
            </tr>
            <tr>
                <td><h3>Różne</h3></td>
            </tr>
            <tr>
                <td>Uwagi: <strong>{{ $comments }}</strong></td>
            </tr>
        @endif
    </table>
    <br>
    <br>
    <table style="width: 100%; margin: 20px 0;">
        <tr>
            <td style="background-color: #16254c; color: #fff; padding: 20px;" align="center">
                Zdrojowa Invest &reg; 2019
            </td>
        </tr>
    </table>
</body>
</html>
<style>
    table tr {
        line-height: 22px;
    }
</style>
