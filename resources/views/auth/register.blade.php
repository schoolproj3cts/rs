@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="register-page">
                <div class="register-card">
                    <div class="d-flex justify-content-center">
                        <div class="register-logo">
                            <img src="/images/logo.png" class="logo" alt="Logo">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center register-container">
                        <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                            @CSRF
                                <div class="input-group">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fal fa-user-alt"></i></span>
                                    </div>
                                    <select class="form-control" id="type" name="type" value="{{ old('type') }}" required autofocus>
                                        <option selected="" disabled="" value="">Type account</option>
                                        <option value="Particulier">Particulier</option>
                                        <option value="Zakelijk">Zakelijk</option>
                                    </select>
                                </div>
                            <div class="input-group">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fal fa-venus-mars"></i></span>
                                </div>
                                <select class="form-control" id="salutation" name="salutation" value="{{ old('salutation') }}" required autofocus>
                                    <option selected="" disabled="" value="">Aanhef</option>
                                    <option value="Dhr.">Dhr.</option>
                                    <option value="Mevr.">Mevr.</option>
                                </select>
                            </div>
                            <div class="input-group">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fal fa-id-card"></i></span>
                                </div>
                                <input id="firstname" type="text" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }} mr-2" name="firstname" value="{{ old('firstname') }}" required autofocus placeholder="Voornaam">
                                <input id="prefix" type="text" class="form-control{{ $errors->has('prefix') ? ' is-invalid' : '' }} mr-2" name="prefix" value="{{ old('prefix') }}" autofocus placeholder="Tussenvoegsel">
                                <input id="lastname" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ old('lastname') }}" required autofocus placeholder="Achternaam">
                            </div>
                            <div class="input-group">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fal fa-home-lg"></i></span>
                                </div>
                                <input id="postal_code" type="text" class="form-control{{ $errors->has('postal_code') ? ' is-invalid' : '' }} mr-2" name="postal_code" value="{{ old('postal_code') }}" required autofocus placeholder="Postcode">
                                <input id="house_number" type="text" class="form-control{{ $errors->has('house_number') ? ' is-invalid' : '' }} mr-2" name="house_number" value="{{ old('house_number') }}" required autofocus placeholder="Huisnummer">
                                <input id="suffix" type="text" class="form-control{{ $errors->has('suffix') ? ' is-invalid' : '' }}" name="suffix" value="{{ old('suffix') }}" autofocus placeholder="Toevoeging">
                            </div>
                            <div class="input-group">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fal fa-road"></i></span>
                                </div>
                                <input id="street_name" type="text" class="form-control{{ $errors->has('street_name') ? ' is-invalid' : '' }}" name="street_name" value="{{ old('street_name') }}" required autofocus placeholder="Straatnaam">
                            </div>
                            <div class="input-group">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fal fa-flag"></i></span>
                                </div>
                                <input id="country" type="text" class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }} mr-2" name="country" value="{{ old('country') }}" required autofocus placeholder="Land">
                                <input id="city" type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ old('city') }}" required autofocus placeholder="Stad">
                            </div>
                            <div class="input-group">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fal fa-phone"></i></span>
                                </div>
                                <input id="phone_number" type="tel" class="form-control{{ $errors->has('phone_number') ? ' is-invalid' : '' }}" name="phone_number" value="{{ old('phone_number') }}" required autofocus placeholder="Telefoonnummer">
                            </div>
                            <div class="input-group">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fal fa-calendar-alt"></i></span>
                                </div>
                                <select class="form-control mr-2" id="birth_day" name="birth_day" value="{{ old('birth_day') }}" required autofocus>
                                    <option selected="" disabled="" value="">Dag</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                </select>
                                <select class="form-control mr-2" id="birth_month" name="birth_month" value="{{ old('birth_month') }}" required autofocus>
                                    <option selected="" disabled="" value="">Maand</option>
                                    <option value="januari">januari</option>
                                    <option value="februari">februari</option>
                                    <option value="maart">maart</option>
                                    <option value="april">april</option>
                                    <option value="mei">mei</option>
                                    <option value="juni">juni</option>
                                    <option value="juli">juli</option>
                                    <option value="augustus">augustus</option>
                                    <option value="september">september</option>
                                    <option value="oktober">oktober</option>
                                    <option value="november">november</option>
                                    <option value="december">december</option>
                                </select>
                                <select class="form-control" id="birth_year" name="birth_year" value="{{ old('birth_year') }}" required autofocus>
                                    <option selected="" disabled="" value="">Jaar</option>
                                    <option value="2019">2019</option>
                                    <option value="2018">2018</option>
                                    <option value="2017">2017</option>
                                    <option value="2016">2016</option>
                                    <option value="2015">2015</option>
                                    <option value="2014">2014</option>
                                    <option value="2013">2013</option>
                                    <option value="2012">2012</option>
                                    <option value="2011">2011</option>
                                    <option value="2010">2010</option>
                                    <option value="2009">2009</option>
                                    <option value="2008">2008</option>
                                    <option value="2007">2007</option>
                                    <option value="2006">2006</option>
                                    <option value="2005">2005</option>
                                    <option value="2004">2004</option>
                                    <option value="2003">2003</option>
                                    <option value="2002">2002</option>
                                    <option value="2001">2001</option>
                                    <option value="2000">2000</option>
                                    <option value="1999">1999</option>
                                    <option value="1998">1998</option>
                                    <option value="1997">1997</option>
                                    <option value="1996">1996</option>
                                    <option value="1995">1995</option>
                                    <option value="1994">1994</option>
                                    <option value="1993">1993</option>
                                    <option value="1992">1992</option>
                                    <option value="1991">1991</option>
                                    <option value="1990">1990</option>
                                    <option value="1989">1989</option>
                                    <option value="1988">1988</option>
                                    <option value="1987">1987</option>
                                    <option value="1986">1986</option>
                                    <option value="1985">1985</option>
                                    <option value="1984">1984</option>
                                    <option value="1983">1983</option>
                                    <option value="1982">1982</option>
                                    <option value="1981">1981</option>
                                    <option value="1980">1980</option>
                                    <option value="1979">1979</option>
                                    <option value="1978">1978</option>
                                    <option value="1977">1977</option>
                                    <option value="1976">1976</option>
                                    <option value="1975">1975</option>
                                    <option value="1974">1974</option>
                                    <option value="1973">1973</option>
                                    <option value="1972">1972</option>
                                    <option value="1971">1971</option>
                                    <option value="1970">1970</option>
                                    <option value="1969">1969</option>
                                    <option value="1968">1968</option>
                                    <option value="1967">1967</option>
                                    <option value="1966">1966</option>
                                    <option value="1965">1965</option>
                                    <option value="1964">1964</option>
                                    <option value="1963">1963</option>
                                    <option value="1962">1962</option>
                                    <option value="1961">1961</option>
                                    <option value="1960">1960</option>
                                    <option value="1959">1959</option>
                                    <option value="1958">1958</option>
                                    <option value="1957">1957</option>
                                    <option value="1956">1956</option>
                                    <option value="1955">1955</option>
                                    <option value="1954">1954</option>
                                    <option value="1953">1953</option>
                                    <option value="1952">1952</option>
                                    <option value="1951">1951</option>
                                    <option value="1950">1950</option>
                                    <option value="1949">1949</option>
                                    <option value="1948">1948</option>
                                    <option value="1947">1947</option>
                                    <option value="1946">1946</option>
                                    <option value="1945">1945</option>
                                    <option value="1944">1944</option>
                                    <option value="1943">1943</option>
                                    <option value="1942">1942</option>
                                    <option value="1941">1941</option>
                                    <option value="1940">1940</option>
                                    <option value="1939">1939</option>
                                    <option value="1938">1938</option>
                                    <option value="1937">1937</option>
                                    <option value="1936">1936</option>
                                    <option value="1935">1935</option>
                                    <option value="1934">1934</option>
                                    <option value="1933">1933</option>
                                    <option value="1932">1932</option>
                                    <option value="1931">1931</option>
                                    <option value="1930">1930</option>
                                    <option value="1929">1929</option>
                                    <option value="1928">1928</option>
                                    <option value="1927">1927</option>
                                    <option value="1926">1926</option>
                                    <option value="1925">1925</option>
                                    <option value="1924">1924</option>
                                    <option value="1923">1923</option>
                                    <option value="1922">1922</option>
                                    <option value="1921">1921</option>
                                    <option value="1920">1920</option>
                                    <option value="1919">1919</option>
                                    <option value="1918">1918</option>
                                    <option value="1917">1917</option>
                                    <option value="1916">1916</option>
                                    <option value="1915">1915</option>
                                    <option value="1914">1914</option>
                                    <option value="1913">1913</option>
                                    <option value="1912">1912</option>
                                    <option value="1911">1911</option>
                                    <option value="1910">1910</option>
                                    <option value="1909">1909</option>
                                    <option value="1908">1908</option>
                                    <option value="1907">1907</option>
                                    <option value="1906">1906</option>
                                    <option value="1905">1905</option>
                                    <option value="1904">1904</option>
                                    <option value="1903">1903</option>
                                    <option value="1902">1902</option>
                                </select>
                            </div>
                            <div class="input-group">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fal fa-envelope"></i></span>
                                </div>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="Email">
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="input-group">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fal fa-lock"></i></span>
                                </div>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Wachtwoord">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="input-group">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fal fa-lock-alt"></i></span>
                                </div>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Wachtwoord bevestigen">
                            </div>
                            <button type="submit" class="btn primary-color register-button">
                                {{ __('Registreren') }}
                            </button>
                        </form>
                    </div>
                </div>
        </div>
    </div>




@endsection
