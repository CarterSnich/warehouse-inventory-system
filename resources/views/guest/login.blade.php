@extends('layouts.base')


@section('style')
    <style>
        #hero {
            position: absolute;
            width: 90%;
            height: 70%;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #C4C4C4;
            border-radius: 30px;

            box-sizing: border-box;
            color: white;

        }

        #hero-content {
            box-sizing: border-box;
            height: 100%;
            width: 50%;
            float: right;

            display: grid;
            place-content: center;
            padding: 2.25rem;
            text-align: center;

            transition: float .5s ease-in-out;
        }

        #hero-content.left {
            float: left
        }

        #forms-container {
            box-sizing: border-box;
            position: absolute;
            width: 40%;
            height: 90%;
            left: 50%;
            top: 50%;
            transform: translate(-100%, -50%);
            background: #5855E9;
            padding: 2.25rem;
            color: white;

            transition: transform .5s ease-in-out
        }

        #forms-container.right {
            transform: translate(0%, -50%);
        }

        #login-form,
        #registration-form {
            display: none;
            flex-direction: column;
            gap: 2.25rem;
        }

        #login-form.show,
        #registration-form.show {
            display: flex;
        }

        .form-inputs {
            display: flex;
            flex-direction: column;
            gap: 2.25rem;

        }

        #login-form .row {
            display: grid;
            grid-template-columns: min-content auto;
            white-space: nowrap;
            row-gap: 1.25rem;
            column-gap: 2.25rem;
        }

        #login-form .row>div {
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        #login-form .row>div>label {
            font-weight: bolder
        }

        #login-form .row>div>input {
            width: 100%;
            border: none;
            border-radius: 1.5rem;
            padding: .75rem;
            background: #D9D9D9;
        }

        #login-form div:last-child {
            display: flex;
            flex-direction: row;
            align-items: center;
            gap: 1.25rem;
        }

        #login-form div:last-child input[type=checkbox] {
            background-color: #D9D9D9;
        }

        #login-form div:last-child button[type=submit] {
            background-color: #D9D9D9;
            border: none;
            border-radius: 10px;
            padding: .75rem;
            flex-grow: 1
        }

        #login-form p,
        #registration-form p {
            text-align: center;
        }

        #registration-link,
        #login-link {
            text-decoration: none
        }


        #registration-form .row {
            display: grid;
            grid-template-columns: auto auto auto auto auto auto auto auto auto auto auto auto auto auto auto auto;
            gap: 1.25rem;
        }

        #registration-form .row>.col-3 {
            grid-column: 10 / 12;
        }

        #registration-form .row>.col-9 {
            grid-column: 1 / 9;
        }

        #registration-form .row>.col-12 {
            grid-column: 1 / 12;
        }

        #registration-form .row>div {
            display: flex;
            flex-direction: row;
            align-items: center;

            background-color: #D9D9D9;
            border: none;
            border-radius: 1.5rem;
            padding: .25rem;

        }

        #registration-form .row>div>label {
            white-space: nowrap;
            word-wrap: none;
        }

        #registration-form .row>div>input,
        #registration-form .row>div>select {
            flex-shrink: 1;
            min-width: 0px;
        }
    </style>
@endsection

@section('body')

    <body>

        <div id="hero">
            <div id="hero-content">
                <h1>Warehouse Inventory System</h1>
                <p>Strong warehouse inventory management can mean the difference between your business making and losing money. In this article, learn best practices and tips from leading experts on improving your inventory management accuracy and efficiency.</p>
            </div>
        </div>

        <div id="forms-container">

            {{-- LOGIN FORM --}}
            <form id="login-form" class="show">

                <h2>WIS Log in</h2>

                <div class="form-inputs">
                    {{-- EMPLOYEE ID --}}
                    <div class="row">
                        <div><label for="employee_id">Employee ID:</label></div>
                        <div><input type="text" name="employee_id" id="employee_id"></div>

                        <div><label for="password">Password:</label></div>
                        <div><input type="password" name="password" id="password"></div>
                    </div>

                    <div>
                        <label>
                            Remember me
                            <input type="checkbox" name="remember_login">
                        </label>
                        <button type="submit">
                            LOG IN
                        </button>
                    </div>
                </div>

                <p>Don't have an account? <a href="javascript:void(0)" id="registration-link">Register here.</a></p>

                <p>All Rights Reserved {{ date('Y') }}</p>

            </form>

            {{-- REGISTRATION FORM --}}
            <form id="registration-form">

                <h2>WIS Register</h2>

                <div class="form-inputs">
                    <div class="row">
                        {{-- FIRSTNAME --}}
                        <div class="col-9">
                            <label for="firstname">First name:</label>
                            <input type="text" name="firstname" id="firstname">
                        </div>
                        {{-- EMPLOYEE ID --}}
                        <div class="col-3">
                            <label for="employee_id">Employee ID:</label>
                            <input type="text" name="employee_id" id="employee_id">
                        </div>
                        {{-- MIDDLENAME --}}
                        <div class="col-9">
                            <label for="middlename">Middlename:</label>
                            <input type="text" name="middlename" id="middlename">
                        </div>
                        {{-- SEX --}}
                        <div class="col-3">
                            <label for="sex">SEX:</label>
                            <select name="sex" id="sex">
                                <option selected disabled>---</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        {{-- LASTNAME --}}
                        <div class="col-9">
                            <label for="lastname">Last name:</label>
                            <input type="text" name="lastname" id="lastname">
                        </div>
                        {{-- BIRTHDATE --}}
                        <div class="col-3">
                            <label for="birthdate">Birthdate:</label>
                            <input type="date" name="birthdate" id="birthdate">
                        </div>
                        {{-- EMAIL --}}
                        <div class="col-12">
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email">
                        </div>
                        {{-- PHONE NUMBER --}}
                        <div class="col-12">
                            <label for="phone_number">Phone number:</label>
                            <input type="text" name="phone_number" id="phone_number">
                        </div>
                    </div>

                    <div>
                        <label>
                            Remember me
                            <input type="checkbox" name="remember_login">
                        </label>
                        <button type="submit">
                            LOG IN
                        </button>
                    </div>
                </div>

                <p>Don't have an account? <a href="javascript:void(0)" id="login-link">Log in here.</a></p>

                <p>All Rights Reserved {{ date('Y') }}</p>

            </form>

        </div>

    </body>
@endsection

@section('script')
    <script>
        document.getElementById('registration-link').addEventListener('click', function() {
            document.getElementById('login-form').classList.remove('show')
            document.getElementById('registration-form').classList.add('show')
            document.getElementById('hero-content').classList.add('left')
            document.getElementById('forms-container').classList.add('right')
        })

        document.getElementById('login-link').addEventListener('click', function() {
            document.getElementById('login-form').classList.add('show')
            document.getElementById('registration-form').classList.remove('show')
            document.getElementById('hero-content').classList.remove('left')
            document.getElementById('forms-container').classList.remove('right')
        })
    </script>
@endsection
