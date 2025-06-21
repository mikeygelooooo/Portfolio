<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Mikey</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@5.3.6/dist/flatly/bootstrap.min.css">

    <link rel="stylesheet" type='text/css' href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    @include('partials.navbar')

    <main>
        <section class="bg-body-tertiary" id="home">
            @include('sections.home')
        </section>

        <section class="bg-dark" id="about">
            @include('sections.about')
        </section>

        <section class="bg-body-tertiary" id="skills">
            @include('sections.skills')
        </section>

        <section class="bg-dark" id="education">
            @include('sections.education')
        </section>

        <section class="bg-body-tertiary" id="projects">
            @include('sections.projects')
        </section>

        <section class="bg-dark" id="experience">
            @include('sections.experience')
        </section>

        <section class="bg-body-tertiary" id="contact">
            @include('sections.contact')
        </section>
    </main>

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>