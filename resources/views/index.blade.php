<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Michael Angelo Ochengco</title>
</head>
<body>
    @include('partials.navbar')

    <main>
        <section id="home">
            @include('sections.home')
        </section>

        <section id="about">
            @include('sections.about')
        </section>

        <section id="skills">
            @include('sections.skills')
        </section>

        <section id="education">
            @include('sections.education')
        </section>

        <section id="projects">
            @include('sections.projects')
        </section>

        <section id="experience">
            @include('sections.experience')
        </section>

        <section id="contact">
            @include('sections.contact')
        </section>
    </main>

    @include('partials.footer')
</body>
</html>