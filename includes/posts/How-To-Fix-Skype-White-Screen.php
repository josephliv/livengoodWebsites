<section class="grid-section">
    <div >
        <p>After a fresh installation of Linux on my laptop I installed skype as normal. Logging in as normal it prompt
            me to enter a pin sent to my email, so after putting this in, it only showed the following blank white
            screen.&nbsp;</p>
        <p>After searching on Google, an easy solution wasn’t found other than reinstalling it and configuring some
            files which to me would be time-consuming.</p>
        <p>Here’s how I found the solution. Right before this, I had another issue with a different program that I
            wanted to install and found the following solution for it, so all I did was swap out the name of the
            software in question and replaced it with skypeforlinux.</p>
        <p>It worked like a charm, give it a try, here’s the command…</p>
        </div>
        <div>
        <p class="terminal">sudo apt-get -o
                DPkg::Options::=”–force-confmiss” –reinstall install skypeforlinux</p>
        <p>By the way, if you are not sure what the file would be called in your Linux, here’s how to know. The reason
            why is because if you just type “skype” for example it will not be recognized.&nbsp;</p>
        <p>So the way you do it is to go to your menu and look for the skype icon, maybe it’s on your panel, right-click
            it and go to properties and in the field that says ‘command’, this is what you want to use when calling it
            via the terminal.</p>
        <p>In my case it said, “/usr/bin/skypeforlinux %U”. So just by typing “skypeforlinux” worked.&nbsp;</p>
    </div>
</section>