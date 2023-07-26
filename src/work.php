<?php
$work = [
    [
        "link" => "https://goffr.com/",
        "title" => "Goffr",
        "description" => "Role: Design and implement scroll animations on top of an existing static theme."
    ],
    [
        "link" => "https://www.quickr.no/",
        "title" => "Quickr",
        "description" => "Role: Design and implement frontend for the customer onboarding and continuous KYC and AML check flows."
    ],
    [
        "link" => "https://servicefirstpermits.com/",
        "title" => "Service first permits",
        "description" => "Role: Work on a centralized portal that simplified the management of projects as they worked through the permit flow with the cities."
    ],
    [
        "link" => "https://sethero.com/",
        "title" => "Set Hero",
        "description" => "Role: Design and implement new call sheet import flow."
    ],
]
?>
<section class="mt-10">
    <h3 class="text-3xl font-bold text-yellow-900">Client Work</h3>

    <ul class="mt-4 text-lg/loose flex flex-col md:grid grid-cols-2 gap-6">
        <?php
        foreach ($work as $entry) {
            echo <<<HTML
                <li class="space-y-1 pt-4 border-t border-black/25">
                    <p>
                        <a class="font-bold underline block truncate" href="{$entry['link']}" target="_blank">{$entry['title']}</a>
                    </p>
                    <p>
                    {$entry['description']}
                    </p>
                </li>
                HTML;
        }
        ?>
    </ul>
</section>