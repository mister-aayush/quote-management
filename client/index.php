<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./src/output.css">
</head>
<body>
    <!-- Fullscreen Background -->
    <div class="relative flex h-screen w-full items-center justify-center bg-cover bg-center" style="background-image: url(image/background.jpeg) ">
        <div class="absolute top-0 right-0 bottom-0 left-0 bg-[radial-gradient(ellipse_at_center,_rgba(0,0,0,0.6)_50%,_transparent_90%)]"></div>
        <!-- Radial Gradient Content Wrapper -->
        <div class="relative z-30 flex w-full max-w-2xl flex-col items-center rounded-2xl px-8 py-5 text-center">
            <!-- Heading -->
            <h1 class="mb-2 text-5xl font-bold text-white drop-shadow-lg md:text-6xl">This is a simple quote</h1>
            <p class="text-center text-white italic">- John Doe</p>

            <div class="mt-10">
                <a href="#" class="rounded-xs bg-white px-4 py-2 font-light uppercase transition-all hover:bg-green-700 hover:text-white">Generate</a>
            </div>
        </div>
    </div>
</body>
</html>