# vagrantPlayground

Testing out Vagrant as a config based dev environment


## Useful commands:

### Starting
Running the machine
`vagrant up`

### Restarting 
For when the configuration changes

`vagrant destroy -f && vagrant up --provision`

### Halt
For example, to free up resources
`vagrant halt`