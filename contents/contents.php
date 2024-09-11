<?php
class contents{
    public function content(){
        ?>
        <div class = "row">
        <div class = "content">
   
            <h1>Main Content</h1>
            <p>
                I know what it's like to lose. To feel, so desperately, that you're right, yet to fail, nonetheless. 
                It's frightening. Turns the legs to jelly. But I ask you, to what end? Dread it, run from it... destiny arrives all the same. And now, it's here.
                Or, should I say... I am.
                Your planet was on the brink of collapse. I'm the one who stopped that. 
                Do you know what's happened since then? The children born have known nothing but full bellies and clear skies. It's a paradise.
                Because I murdered half the planet?
                It's a small price to pay for salvation.
                Little one, it's a simple calculus. This universe is finite, it's resources finite. If life is left unchecked, life will cease to exist.
                It needs correction! I'm the only one who knows that... at least, I'm the only one with the will to act on it.
            </p>
            <?php $this->side_bar();?>

    </div>
        <?php
    }
    public function side_bar(){
        ?>
        <div class = "side_bar">
            <h1>Side Bar</h1>
            <p>
               Genocide.
               But random, dispassionate, fair to rich and poor alike. They called me a madman. And what I predicted came to pass. 
               With all six stones, I could simply snap my fingers and they would all cease to exist. I call that mercy. And then I'd finally rest,
               and watch the sun rise on a grateful universe.
               The hardest choices require the strongest wills.
               [I also find it interesting that there are two different times in the movie where someone calls what he's trying to do "murder" or "genocide", 
               and he doesn't contradict them... he doesn't say it himself, but he doesn't dispute it, and he basically works it into his monologue
               (which, for the sake of flow, I did here as well) and continues, explaining why his methodology makes sense within his world view.]
            </p>

        </div>
    </div>
        <?php
    }
}
