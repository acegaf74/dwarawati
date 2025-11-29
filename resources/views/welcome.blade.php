<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    @vite('resources/css/app.css')
</head>
<body class="max-h-screen grid-[1fr_auto_1fr]">
    <header class="">
        <h1 class="text-3xl font-bold underline">Header</h1>
        <nav class="">
            <ul>
                <li><a href="/login">Login</a></li>
                <li><a href="/register">Register</a></li>
            </ul>
        </nav>
    </header>
    <main class="">
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