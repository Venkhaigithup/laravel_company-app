<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/tailwind_vite.css')
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign in to your account</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="#" method="POST">
                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                        <div class="text-sm">
                            <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot password?</a>
                        </div>
                    </div>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
                </div>
            </form>

            <p class="mt-10 text-center text-sm text-gray-500">
                Not a member?
                <a href="#" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Start a 14 day free trial</a>
            </p>
        </div>
    </div>
    {{-- table in tailwind --}}
    <table class="border-separate border border-slate-400 border-spacing-[50px]">
        <thead>
            <tr>
                <th class="border border-spacing-9 ...">State</th>
                <th class="border border-slate-300 ...">City</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="border border-slate-300 ...">Indiana</td>
                <td class="border border-slate-300 ...">Indianapolis</td>
            </tr>
            <tr>
                <td class="border border-slate-300 ...">Ohio</td>
                <td class="border border-slate-300 ...">Columbus</td>
            </tr>
            <tr>
                <td class="border border-slate-300 ...">Michigan</td>
                <td class="border border-slate-300 ...">Detroit</td>
            </tr>
        </tbody>
    </table>
    {{-- table in bootstrap --}}
    <table class="table-warning table">
        <thead>
            <tr class="table-info">
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                <th scope="col">Cash</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr class="table-danger">
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
            </tr>
            <tr>
                <td class="table-primary">skjdk</td>
                <td class="table-secondary">skjdk</td>
                <td class="table-success">skjdk</td>
                <td class="table-danger">skjdk</td>
            </tr>
        </tbody>
    </table>


    <div class="bg-success p-2 text-white">This is default success background</div>
    <div class="bg-success p-2 text-white bg-opacity-75">This is 75% opacity success background</div>
    <div class="bg-success p-2 text-dark bg-opacity-50">This is 50% opacity success background</div>
    <div class="bg-success p-2 text-dark bg-opacity-25">This is 25% opacity success background</div>
    <div class="bg-success p-2 text-dark bg-opacity-10">This is 10% opacity success background</div>

    <div class="mb-3 bg-red-600">
        <label for="formFile" class="form-label">Default file input example</label>
        <input class="form-control" type="file" id="formFile">
    </div>
    <div class="mb-3">
        <label for="formFileMultiple" class="form-label">Multiple files input example</label>
        <input class="form-control" type="file" id="formFileMultiple" multiple>
    </div>
    <div class="mb-3">
        <label for="formFileDisabled" class="form-label">Disabled file input example</label>
        <input class="form-control" type="file" id="formFileDisabled" disabled>
    </div>
    <div class="mb-3">
        <label for="formFileSm" class="form-label">Small file input example</label>
        <input class="form-control form-control-sm" id="formFileSm" type="file">
    </div>
    <div>
        <label for="formFileLg" class="form-label">Large file input example</label>
        <input class="form-control form-control-lg" id="formFileLg" type="file">
    </div>
    <label for="exampleColorInput" class="form-label">Color picker</label>
    <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#563d7c" title="Choose your color">


</body>
</html>
