@extends('layouts.master')

@section('content')
    <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-white font-weight-bold text-8">President’s Award Winners</h1>
                    {{-- <span class="sub-title text-white">Check out our Latest News!</span> --}}
                </div>

            </div>
        </div>
    </section>

    <div class="container py-4">

        <div class="row">
            <div class="col">
                <div class="blog-posts single-post">

                    <article class="post post-large blog-single-post border-0 m-0 p-0">



                        <div class="post-content ms-0">

                            {{-- <h4 class="font-weight-semi-bold">Post-war Scouting: 1946-1968:</h4> --}}

                          
                             <div style="text-align: center; line-height: 3; color: black !important;">

                              <p style="margin: 10px; font-weight: bold; color: black !important;">1970</p>
                              <p style="margin: 10px; color: black !important;">A.H. Mendis</p>

                              <p style="margin: 10px; font-weight: bold; color: black !important;">1974</p>
                              <p style="margin: 10px; color: black !important;">M.H. Dodangoda</p>
                              <p style="margin: 10px; color: black !important;">B.J. Raasinghe</p>
                              <p style="margin: 10px; color: black !important;">M.B. Hussain</p>
                              <p style="margin: 10px; color: black !important;">E.G. Rmanayake</p>
 
                              <p style="margin: 10px; font-weight: bold; color: black !important;">1976</p>
                              <p style="margin: 10px; color: black !important;">N. Nadaraja</p>

                              <p style="margin: 10px; font-weight: bold; color: black !important;">1979</p>
                              <p style="margin: 10px; color: black !important;">D.D. John</p>
                              <p style="margin: 10px; color: black !important;">A.S.I. de Fonseka</p>

                              <p style="margin: 10px; font-weight: bold; color: black !important;">1980</p>
                              <p style="margin: 10px; color: black !important;">K.T. Wimalasekara</p>
                              <p style="margin: 10px; color: black !important;">T.B. Meedeniya</p>
                              <p style="margin: 10px; color: black !important;">J.N. Rambukotta</p>
                              <p style="margin: 10px; color: black !important;">S. Dahanayake</p>

                              <p style="margin: 10px; font-weight: bold; color: black !important;">1981</p>
                              <p style="margin: 10px; color: black !important;">J.K.K. Sugathadasa</p>
                              <p style="margin: 10px; color: black !important;">C.S.T. Goonethillake</p>
                              <p style="margin: 10px; color: black !important;">A.C.B. Meedeniya</p>

                              <p style="margin: 10px; font-weight: bold; color: black !important;">1983</p>
                              <p style="margin: 10px; color: black !important;">P. Abarajithan</p>

                              <p style="margin: 10px; font-weight: bold; color: black !important;">1987</p>
                              <p style="margin: 10px; color: black !important;">A.C. Perera</p>
                              <p style="margin: 10px; color: black !important;">P.S. Naguleawaran</p>

                              <p style="margin: 10px; font-weight: bold; color: black !important;">1988</p>
                              <p style="margin: 10px; color: black !important;">M.R. Suhayb</p>
                              <p style="margin: 10px; color: black !important;">L.B.S. Ratnayake</p>

                              <p style="margin: 10px; font-weight: bold; color: black !important;">1989</p>
                              <p style="margin: 10px; color: black !important;">M.N.W. de Alwis</p>

                              <p style="margin: 10px; font-weight: bold; color: black !important;">1990</p>
                              <p style="margin: 10px; color: black !important;">W.S.L.P. Perera</p>

                              <p style="margin: 10px; font-weight: bold; color: black !important;">1991</p>
                              <p style="margin: 10px; color: black !important;">D.H.C.P. Kurukularatne</p>

                              <p style="margin: 10px; font-weight: bold; color: black !important;">1992</p>
                              <p style="margin: 10px; color: black !important;">R.S.V. Perera</p>
                              <p style="margin: 10px; color: black !important;">S.N.G. Silva</p>
                              <p style="margin: 10px; color: black !important;">N.K. Athukorala</p>
                              <p style="margin: 10px; color: black !important;">M.B. Obeysekara</p>
                              <p style="margin: 10px; color: black !important;">W.N.O. Fernando</p>

                              <p style="margin: 10px; font-weight: bold; color: black !important;">1994</p>
                              <p style="margin: 10px; color: black !important;">N.M. Seneviratne</p>
                              <p style="margin: 10px; color: black !important;">R. Ranasinghe</p>
                              <p style="margin: 10px; color: black !important;">A.R. Gunawardene</p>
                              <p style="margin: 10px; color: black !important;">M.D.H. Peiris</p>
                              <p style="margin: 10px; color: black !important;">K.B.B.R. Kulapala</p>
 
                              <p style="margin: 10px; font-weight: bold; color: black !important;">1995</p>
                              <p style="margin: 10px; color: black !important;">N.D. Aluwihare</p>
                              <p style="margin: 10px; color: black !important;">T.M.H. Bandara</p>
                              <p style="margin: 10px; color: black !important;">C.A. Kulathilleke</p>
                              <p style="margin: 10px; color: black !important;">S.M. Jayasooriya</p>
                              <p style="margin: 10px; color: black !important;">A.N. Manamperi</p>

                              <p style="margin: 10px; font-weight: bold; color: black !important;">1996</p>
                              <p style="margin: 10px; color: black !important;">R.S. Wanigathunga</p>
                              <p style="margin: 10px; color: black !important;">R.S. Samarasinghe</p>
                              <p style="margin: 10px; color: black !important;">C.S. Seneviratne</p>
                              <p style="margin: 10px; color: black !important;">C.R. de Alwis</p>

                              <p style="margin: 10px; font-weight: bold; color: black !important;">1997</p>
                              <p style="margin: 10px; color: black !important;">R.Y. Wanigathunga</p>
                              <p style="margin: 10px; color: black !important;">M. Mallawarachchi</p>
                              <p style="margin: 10px; color: black !important;">D.N. Peter</p>
                              <p style="margin: 10px; color: black !important;">K.P.L. Perera</p>
                              <p style="margin: 10px; color: black !important;">I.U.P. Suriyapperuma</p>
                              <p style="margin: 10px; color: black !important;">N.D. Dias</p>
                              <p style="margin: 10px; color: black !important;">S.N. Peter</p>
                              <p style="margin: 10px; color: black !important;">A.A. Farook</p>

                              <p style="margin: 10px; font-weight: bold; color: black !important;">1999</p>
                              <p style="margin: 10px; color: black !important;">M.N.R. Peiris</p>
                              <p style="margin: 10px; color: black !important;">D.T.T. Abeysekara</p>

                              <p style="margin: 10px; font-weight: bold; color: black !important;">2000</p>
                              <p style="margin: 10px; color: black !important;">S.S. de Alwis</p>
                              <p style="margin: 10px; color: black !important;">C.T. Fernando</p>
                              <p style="margin: 10px; color: black !important;">W.D.V. Fernando</p>
                              <p style="margin: 10px; color: black !important;">L.N. Fernando</p>
                              <p style="margin: 10px; color: black !important;">M.B. Perera</p>

                              <p style="margin: 10px; font-weight: bold; color: black !important;">2001</p>
                              <p style="margin: 10px; color: black !important;">L.P.D.P. de Silva</p>

                              <p style="margin: 10px; font-weight: bold; color: black !important;">2002</p>
                              <p style="margin: 10px; color: black !important;">N.S. Samararatne</p>
                              <p style="margin: 10px; color: black !important;">I.D. Weerapperuma</p>
                              <p style="margin: 10px; color: black !important;">M.Z. Issadeen</p>
                              <p style="margin: 10px; color: black !important;">D. Binduhewa</p>
                              <p style="margin: 10px; color: black !important;">J.A.S. Senaratne</p>
                              <p style="margin: 10px; color: black !important;">D.I. de Silva</p>

                              <p style="margin: 10px; font-weight: bold; color: black !important;">2003</p>
                              <p style="margin: 10px; color: black !important;">R.J. Perera</p>
                              <p style="margin: 10px; color: black !important;">R.S. Goonewardene</p>
                              <p style="margin: 10px; color: black !important;">M.D. de Silva</p>

                              <p style="margin: 10px; font-weight: bold; color: black !important;">2004</p>
                              <p style="margin: 10px; color: black !important;">A.D. de Silva</p>
                              <p style="margin: 10px; color: black !important;">K.A.S. Dassanayake</p>
                              <p style="margin: 10px; color: black !important;">B.H.P. Vithanage</p>
                              <p style="margin: 10px; color: black !important;">V.S. Wickramasekara</p>
                              <p style="margin: 10px; color: black !important;">M.O. Farook</p>
                              <p style="margin: 10px; color: black !important;">D.B.S.U. de Silva</p>
                              <p style="margin: 10px; color: black !important;">D.T. Goonewardene</p>
                              <p style="margin: 10px; color: black !important;">S.D. Aluwihare</p>
                              <p style="margin: 10px; color: black !important;">B.H.E.N. Wijewickrama</p>
                              <p style="margin: 10px; color: black !important;">H.C. Fernando</p>

                              <p style="margin: 10px; font-weight: bold; color: black !important;">2005</p>
                              <p style="margin: 10px; color: black !important;">J.P. Goonewardene</p>

                              <p style="margin: 10px; font-weight: bold; color: black !important;">2006</p>
                              <p style="margin: 10px; color: black !important;">K. Kandasamy</p>

                              <p style="margin: 10px; font-weight: bold; color: black !important;">2007</p>
                              <p style="margin: 10px; color: black !important;">J.D.E. Ranasinghe</p>
                              <p style="margin: 10px; color: black !important;">S. De Silva</p>

                              <p style="margin: 10px; font-weight: bold; color: black !important;">2008</p>
                              <p style="margin: 10px; color: black !important;">R.A.I. De Fonseka</p>
                              <p style="margin: 10px; color: black !important;">R.D. De Alwis</p>

                              <p style="margin: 10px; font-weight: bold; color: black !important;">2009</p>
                              <p style="margin: 10px; color: black !important;">M.A. Jesudason</p>
                              <p style="margin: 10px; color: black !important;">V.R. Ladduwahetty</p>
                              <p style="margin: 10px; color: black !important;">H.A. De Mel</p>

                              <p style="margin: 10px; font-weight: bold; color: black !important;">2010</p>
                              <p style="margin: 10px; color: black !important;">S.M. De Silva</p>
                              <p style="margin: 10px; color: black !important;">N.N. Rajasingham</p>
                              <p style="margin: 10px; color: black !important;">M.F. Iqbal</p>
                              <p style="margin: 10px; color: black !important;">R.P. Indushan</p>
                              <p style="margin: 10px; color: black !important;">K.P.P.S. Ariyaratne</p>

                              <p style="margin: 10px; font-weight: bold; color: black !important;">2011</p>
                              <p style="margin: 10px; color: black !important;">C.D. De Mel</p>
                              <p style="margin: 10px; color: black !important;">S.C. Gajanayaka</p>
                              <p style="margin: 10px; color: black !important;">A.A.H. Abdul Carder</p>
                              <p style="margin: 10px; color: black !important;">D.G.D. Colonne</p>
                              <p style="margin: 10px; color: black !important;">N.J. Wikkramatilleke</p>

                              <p style="margin: 10px; font-weight: bold; color: black !important;">2012</p>
                              <p style="margin: 10px; color: black !important;">N.J. Bulathsinghala</p>
                              <p style="margin: 10px; color: black !important;">M.F. Faisal</p>

                              <p style="margin: 10px; font-weight: bold; color: black !important;">2013</p>
                              <p style="margin: 10px; color: black !important;">K.H.B. Hurulle</p>

                              <p style="margin: 10px; font-weight: bold; color: black !important;">2014</p>
                              <p style="margin: 10px; color: black !important;">H.N.G. Soysa</p>
                              <p style="margin: 10px; color: black !important;">G.N. Neelaghandan</p>
                              <p style="margin: 10px; color: black !important;">S.R. Faber</p>
                              <p style="margin: 10px; color: black !important;">M.A.A. Deen</p>

                              <p style="margin: 10px; font-weight: bold; color: black !important;">2015</p>
                              <p style="margin: 10px; color: black !important;">P.R. Wanigasooriya</p>
                              <p style="margin: 10px; color: black !important;">A.Q.H. Muheed</p>

                              <p style="margin: 10px; font-weight: bold; color: black !important;">2016</p>
                              <p style="margin: 10px; color: black !important;">P. Ajith</p>
                              <p style="margin: 10px; color: black !important;">B.C.C.G. De Silva</p>
                              <p style="margin: 10px; color: black !important;">W.H.S. Fernando</p>
                              <p style="margin: 10px; color: black !important;">D.M. Giragama Dullewe</p>
                              <p style="margin: 10px; color: black !important;">W.T.G. Kalana Kulshan</p>
                              <p style="margin: 10px; color: black !important;">R.N.W.A. De Silva</p>

                              <p style="margin: 10px; font-weight: bold; color: black !important;">2017</p>
                              <p style="margin: 10px; color: black !important;">P. Bandaratilleke</p>
                              <p style="margin: 10px; color: black !important;">H.M.P.D Palapathwala</p>
                              <p style="margin: 10px; color: black !important;">D.S. Udage</p>
                              <p style="margin: 10px; color: black !important;">D.S. Samaraweera</p>
                              <p style="margin: 10px; color: black !important;">N.W.T. Chandradasa</p>

                    

                            
                        </div>
                        <br>

                    </article>

                </div>
            </div>
        </div>

    </div>
@endsection
