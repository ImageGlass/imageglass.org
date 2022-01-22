@extends("layouts._layout")
@section("_body_content")

<section class="container py-4 py-lg-5">
    <div class="row no-gutters">
        <h2 class="fs-h1 mb-4">
            Oops! There is no result for "Spider service".<br/>
            Do you mean "Spider Man" 🦸‍♂️?
        </h2>
    </div>

    <div class="row no-gutters">
        <article class="col-md-8 col-lg-8 col-xxl-9 col-hg-10 pr-0 pr-md-4 article-post links">
            <h3 class="fs-h3 mb-3">
                Here is what I found about Spider Man from <a href="https://en.wikipedia.org/wiki/Spider-Man" target="_blank" rel="noopener noreferrer nofollow">Wikipedia</a>:
            </h3>
            <img src="https://upload.wikimedia.org/wikipedia/en/2/21/Web_of_Spider-Man_Vol_1_129-1.png" width="200" style="float: left; margin: 0 20px 20px 0;" />
            <p>
                <i>Spider-Man is a superhero appearing in American comic books published by Marvel Comics. Created by writer-editor Stan Lee and artist Steve Ditko, he first appeared in the anthology comic book Amazing Fantasy #15 (August 1962) in the Silver Age of Comic Books. He has since been featured in movies, television shows, video games, and plays.</i>
            </p>
            <p>
                <i>Spider-Man is the alias of Peter Parker, an orphan raised by his Aunt May and Uncle Ben in New York City after his parents Richard and Mary Parker died in a plane crash. Lee and Ditko had the character deal with the struggles of adolescence and financial issues and gave him many supporting characters, such as Flash Thompson, J. Jonah Jameson and Harry Osborn, romantic interests Gwen Stacy, Mary Jane Watson and the Black Cat, and foes such as Doctor Octopus, the Green Goblin and Venom. In his origin story, he gets spider-related abilities from a bite from a radioactive spider; these include clinging to surfaces, superhuman strength and agility, and detecting danger with his "spider-sense." He also builds wrist-mounted "web-shooter" devices that shoot artificial spider webs of his own design.</i>
            </p>
        </article>

        <aside class="col-md-4 col-lg-4 col-xxl-3 col-hg-2 px-0 px-md-3 aside">
            @include("shared._ads")
            @include("modules.aside.article-list")
        </aside>
    </div>

    <div class="row mt-5">
        <div class="col-md-8 col-lg-8 col-xxl-9 col-hg-10 pr-0 pr-md-4">
            @include("shared._donation")
        </div>
    </div>
    
</section>

@stop