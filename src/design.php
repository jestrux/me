<?php
$work = [
    [
        "link" => "https://www.youtube.com/watch?v=zvHPEgxiED8",
        "description" => "Walkthrough video of a website redesign I created for a client"
    ],
    [
        "link" => "https://medium.com/@wakyj07/ui-ux-design-tips-by-re-designing-one-of-my-old-school-projects-7bfc3e49cc28",
        "description" => "A blog detailing my redesign of a website I made in college"
    ],
    [
        "link" => "https://www.youtube.com/watch?v=mjmP_Y_C7Kc",
        "description" => "Walkthrough of a well-designed dashboard app for personal and enterprise clients"
    ],
]
?>
<section class="mt-10">
    <h3 class="text-3xl font-bold text-yellow-900">Design</h3>

    <div class="mt-4 text-lg/loose">

        <p class="">
            I have a keen eye for detail and have been cultivating my UI/UX design skills for years. To stay relevant, I also spend a decent amount of time keeping up with modern design practices.
        </p>

        <p class="mt-4">
            Here are some of my design-related pieces:
        </p>

        <ul class="mt-6 flex flex-col md:grid grid-cols-2 gap-6">
            <?php
            foreach ($work as $entry) {
                $label = strpos($entry['link'], 'medium') ? "Read blog" : "Watch video";

                echo <<<HTML
                    <li class="space-y-1 pt-4 border-t border-black/25">
                        <p>
                        {$entry['description']}
                        </p>

                        <a class="leading-none h-8 inline-flex items-center rounded text-base font-bold underline" href="{$entry['link']}" target="_blank">
                            $label
                        </a>
                    </li>
                    HTML;
            }
            ?>
        </ul>
    </div>
</section>