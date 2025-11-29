<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    @vite('resources/css/app.css')
</head>
<body class="flex flex-col min-h-screen">
    <header class="flex justify-between">
        <h1 class="text-3xl font-bold underline">Header</h1>
        <nav class="">
            <ul class="flex gap-2">
                <li><a href="/login" class="btn bg-blue-100 shadow-sm border rounded-md text-blue-900">
                    Login
                </a></li>
                <li><a href="/register" class="btn bg-blue-100 shadow-sm border rounded-md text-green-900">
                    Register
                </a></li>
            </ul>
        </nav>
    </header>
    <main class="flex-grow">
        <form action="">
            <label for="">Dropdown</label>
            <div class="">
                <select name="" id="">
                    <option>Option 1</option>
                    <option>Option 2</option>
                    <option>Option 3</option>
                    <option>Option 4</option>
                </select>
                <input type="submit" value="Submit">
            </div>
        </form>
        <aside class="">Sidebar</aside>
        <div class="">Advertising</div>
    </main>
    <footer class="">Footer</footer>
</body>
</html>