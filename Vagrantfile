# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|

  # https://docs.vagrantup.com.

  # Every Vagrant development environment requires a box. You can search for
  # boxes at https://vagrantcloud.com/search.
  #config.vm.box = "hashicorp/bionic64"
  
  #config.vm.box = "laravel/homestead"
  #config.vm.box_version = "9.5.1"
  
  config.vm.box = "hackyard/ubuntu2002-webdev"

  # Create a forwarded port mapping which allows access to a specific port
  # within the machine from a port on the host machine. 
  config.vm.network "forwarded_port", guest: 80, host: 8080

  # Create a private network, which allows host-only access to the machine
  # using a specific IP.
  config.vm.network "private_network", ip: "192.168.33.10"

  # Create a public network, which generally matched to bridged network.
  # Bridged networks make the machine appear as another physical device on
  # your network.
  # config.vm.network "public_network"

  # Share an additional folder to the guest VM.
  config.vm.synced_folder "src/", "/var/www/html"

  
  # delete existing sites-enabled tag
  config.vm.provision "shell", inline: "rm /etc/nginx/sites-enabled/default"
  # copy nginx config to vagrant machine
  config.vm.provision "file", source: "nginx.conf", destination: "/tmp/nginx.conf"
  # move new default to the proper place
  config.vm.provision "shell", inline: "mv /tmp/nginx.conf /etc/nginx/sites-available/default_site"

  config.vm.provision "shell", inline: "ln -s /etc/nginx/sites-available/default_site /etc/nginx/sites-enabled/default_site"

end
