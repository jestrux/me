<?php
$work = [
    [
        "link" => "https://goffr.com/",
        "title" => "Goffr",
        "description" => "Role: Design and implement scroll animations."
    ],
    [
        "link" => "https://www.quickr.no/",
        "title" => "Quickr",
        "description" => "Role: Design and implement customer onboarding and continuous KYC and AML check flows."
    ],
    [
        "link" => "https://sethero.com/",
        "title" => "Set Hero",
        "description" => "Role: Design and implement new call sheet import flow."
    ],
    [
        "link" => "https://servicefirstpermits.com/",
        "title" => "Service first permits",
        "description" => "Role: Work on centralized portal for management of project permits."
    ],
]
?>
<section class="mt-12">
    <h3 class="text-3xl font-bold text-yellow-900">Client Work</h3>

    <ul class="mt-4 text-lg/relaxed flex flex-col md:grid grid-cols-2 gap-6">
        <?php
        foreach ($work as $entry) {
            echo <<<HTML
                <li>
                    <div class="mb-3 bg-black/5 border rounded w-full aspect-[2/1]">
                        
                    </div>

                    <div class="space-y-1">
                        <p>
                            <a class="text-xl font-bold underline truncate" href="{$entry['link']}" target="_blank">{$entry['title']}</a>
                        </p>
                        <p>
                        {$entry['description']}
                        </p>
                    </div>
                </li>
                HTML;
        }
        ?>
    </ul>
</section>