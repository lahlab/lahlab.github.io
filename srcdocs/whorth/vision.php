<?php
if($self['unread']) {
  $self['title'] = "WHORTH, vision and FORTH";
  $self['headln'] = "WHORTH, vision and FORTH";
  $self['desc'] = <<<END
    WHORTH is inspired by FORTH. mainly early FORTH - think FORTH79 and
    earlier (I'm old enough). But it also try to bring new stuff to the
    table and are different enough that code compability with standard
    FORTH is not a meaningful target.
    END;
  $self['unread'] = 0;
}
if($honly) {
  return 0;
}
include "${lib}/head.php";

// <div><h1><?=$self['headln']?//></h1>
// <h3>WHORTH - The ugly duckling of FORTH</h3>

?><div>
<p class="ing"><?=$self['desc']?> Still try to avoid using standard
    FORTH names for something different without good reason (avoiding
    unnecessary confusion is a good thing). Here follow some of the
    visions of WHORTH:</p>

<p><ul>
<li><a class="trml" title="Trains"
   href="trains.html">»</a><b>Trains:</b> WHORTH have a slightly different word parsing. For more readability and easier and cleaner integration of different features.</li>

<li><b>Duck typing:</b> WHORTH use duck typing. Currently Pythons right of but is planed to keep something similar implemented in more efficient ways. Manly duck typing should be a thing for the text interpreter / compiler - compiled words should have concrete types. That means adding mechanism for word overloading, concepts and probably to some extent generic words. Details to be worked out later.</li>

<li><b>Named parameters</b> Some formalization of word signatures is needed for duck typing. Only types are needed but optionally You should be
able to name parameters and then access them as special boxes (WHORTH's 'variables'). Maybe also make it possible to define local boxes.
Stack values get a bit anonymous at times. This can be used for environment stuff to.</li>

<li><b>Simplicity:</b> Keep it simple. Most what modern FORTH call naive assumptions should hold true for compiling. Duck typing will complicate things a bit but it should be in predictable ways. Optimization should be a separate step and may throw everything off.</li>

<li><b>Risky mode:</b> WHORTH will have a risky mode. Words like @ and ! that access/manipulate memory will by risky (overloaded version that use (index buffer) instead of (addr) must not be risky if buffer is bound checked). Any word defined in risky mode will be risky unless explicitly flagged SAFE. Memory corruption bugs are a pain and limiting the amount of code needed to debug those issues is a good thing.</li>

<li><b>Blue sky:</b> Some loos plans adding array programming and declarative (logic) programming features (built on the features duck typing demand anyway).</li>

<li><b>Portability:</b> As much as possible of WHORTH should have a WHORTH implementation to make porting easy (there may also be target specific native alternative for speed). WHORTH should have target compiling features (considering everything else then the running environment a target - whether the same platform or not). All to make porting easy. The platforms I will focus on are probably Python, WASM and js (as it's needed to use WASM on the web).</li>

<li><b>Interactivity:</b> WHORTH should be designed to primarily be used interactively. Rich documentation should be at the prompt including tutorials. Introspection, searching and choosing imports, editing and updating code... all should be comfortably done from the prompt. When target compiling it should be possible to opt out thou because sometimes small cod size matter.</li>

<li><b>WhorthPedia:</b> Try to create something better then how libs work today. Based on word for word or paragraph for paragraph (WHORTH's take on clasical FORTH blocks - a few related word). This will probably include some distributed possible P2P networking features. Pretty blue sky this one to.</li>

<li><b>Concrete:</b> WHORTH should not hide the concrete platform, it should be accessible. Vertical transparency is important. You should be able to really understand how it works. Possibly platform specific stuff will be flagged risky but <b>not</b> hidden.</li>

</ul></p>

<p class="ing">Some of thise things are addressed by standard FORTH, but starting over from scratch and building on trains, duck typing etc I think it can be done cleaner. It is at least worth an attempt.</p>
</div><?php
include "${lib}/foot.php";

