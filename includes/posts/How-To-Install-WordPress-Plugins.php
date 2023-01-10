
<section>
    <div class="grid-section">
        <div >
            <p>After installing apache server and setting it all up to run wordpress, we need to add more to it.
                WordPress by it self will run but you may want to install updates, more plugins and things like this to
                test or build your project.</p>
            <p>Here’s what happens if you try to install an additional plugin, it will prompt you for a FTP (File
                Transport Protocol) username, password and server information to pull that data. So what are you suppose
                to put here? Well that is what this brief article is about, how to install plugins for wordpress when on
                a local machine.</p>
            <p>If you are running linux, the commands below should work fine but if you are running windows, I can write
                another article on how to do it because it is totally different.</p>
            <p>Using a debian or ubuntu base OS, open the terminal put in the following commands.</p>
            <div class="terminal">sudo apt install vsftpd </div>
            <p>This stands for Very Secure FTP Daemon (background service).</p>
            <p>Now we need to edit the configuration file to be able to use it by enabling the files, so in the terminal
                type in…</p>
            <div class="terminal">
                sudo nano /etc/vsftpd.conf
            </div>
            <p>The terminal will open this file to be edited, here you cannot use the mouse, so you need to use the
                arrow keys and scroll down to fine the line that says “#write_enable=YES”<br>
                and remove the hashtag (#) to enable this feature. </p>
            <div class="terminal">
                write_enable=YES
            </div>
            <p>To save and close, use ctrl+s and then ctrl+x to exit.</p>
            <p>Now we need to restart the service for it to work, so in the terminal put in the following..</p>
            <div class="terminal">sudo systemctl reload vsftpd</div>
            <p>Next we want to check to make sure everything saved properly by replacing the “reload” with the word
                “status”.</p>
            <p>Just use the up arrow to bring up the previous command, now use the left arrow to move the cursor to the
                word reload, remove this and just type status, should look like this…</p>
            <div class="terminal">sudo systemctl status vsftpd</div>
        </div>
        <div>
            
                <p>This should display the following</p>
                <div class="terminal">
                    <p>vsftpd.service – vsftpd FTP serverLoaded: loaded (/lib/systemd/system/vsftpd.service; enabled;
                        vendor preset </p>
                    <p>Active: <span style="color: #00ff33;">active (running)</span> since Tue 2022-07-26 09:47:30 -05;
                        36min ago</p>
                    <p>Process: 809 ExecStartPre=/bin/mkdir -p /var/run/vsftpd/empty (code=exited,&gt;</p>
                    <p>Main PID: 813 (vsftpd)</p>
                    <p>Tasks: 1 (limit: 18474)</p>
                    <p>Memory: 948.0K</p>
                    <p>CGroup: /system.slice/vsftpd.service<br>&nbsp;&nbsp;&nbsp; └─776 /usr/sbin/vsftpd
                        /etc/vsftpd.conf</p>
                </div>
                <p>You noticed that the active (running) will be in green text letting you know it’s good to go.</p>
                <p>So let’s put it to the test!</p>
                <p>If you are not already, go ahead and log in to your local WordPress site and try to install a plugin.
                    It will prompt you to ask for some information, this is what you should put in.</p>
                <p>FTP credentials should be the same as your Linux login, the username and password you use to log in
                    and the URL will be the site’s URL that you use locally such as … site.test </p>
                <p>If you are not sure what your username is, just open the file manager and within the home folder
                    should have your name listed there.</p>
                <p>With this correctly entered, the plugin and updates should install without any problems.</p>
                <p>I hope this helped, let me know in the comments below if you have any snags or problems. Thanks for
                    reading.</p>
            
        </div>
    </div>
</section>