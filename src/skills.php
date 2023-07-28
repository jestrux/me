<div class="mt-10">
    <h3 class="text-3xl font-bold text-yellow-900">Skills</h3>

    <div class="space-y-4 text-lg">
        <!-- <p class="text-lg/loose">
        I’ve worked with most frontend libraries and frameworks from modern ones like <strong>React</strong>, Vue, AlpineJS, and Svelte to older ones like <strong>JQuery</strong>, AngularJS, and Polymer. I’m very proficient with CSS both custom-written and using <strong>TailwindCSS</strong> which is my current preferred styling choice.
        </p> -->

        <?php
        $skills = [
            "HTML / CSS / Javascript",
            "React / NEXT",
            "TailwindCSS",
            "AlpineJS",
            // "Bootstrap",
            "Vue / NUXT",
            "Flutter / Dart",
            "Electron",
            "JQuery",
            "AngularJS",
            "Laravel",
            "Laravel / PHP & MYSQL",
            "Git & Github",
        ];

        foreach ($skills as $skill) {
            echo <<<HTML
                <div class="mr-4 h-10 px-4 pt-px inline-flex items-center text-xs font-bold uppercase tracking-widest rounded-full border border-black/30">
                    $skill</div>
                HTML;
        }
        ?>
    </div>
</div>