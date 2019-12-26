# How to setup PHP server !

1. Install docker
```
$ docker --version
Docker version 19.03.5, build 633a0ea838
```
2. Install docker-compose
```
$ docker-composer --version
docker-compose version 1.25.0, build 0a186604
```
3. Launch server
```
$ cd timerjs
timerjs$ docker-compose up -d
```
4. Found out what is your ip
```
Debian: $ ip address
Other:  $ ifconfig
1: lo: <LOOPBACK,UP,LOWER_UP> mtu 65536 qdisc noqueue state UNKNOWN group default qlen 1000
    link/loopback 00:00:00:00:00:00 brd 00:00:00:00:00:00
    inet 127.0.0.1/8 scope host lo
       valid_lft forever preferred_lft forever
    inet6 ::1/128 scope host 
       valid_lft forever preferred_lft forever
2: wlp60s0: <BROADCAST,MULTICAST,UP,LOWER_UP> mtu 1500 qdisc mq state UP group default qlen 1000
    link/ether f4:63:1f:e2:79:56 brd ff:ff:ff:ff:ff:ff
    inet 192.168.178.27/24 brd 192.168.178.255 scope global dynamic noprefixroute wlp60s0
       valid_lft 858741sec preferred_lft 858741sec
    inet6 fe80::5abf:2665:b732:5545/64 scope link noprefixroute 
       valid_lft forever preferred_lft forever
```
The private IP (<private_ip>) in this case is "192.168.178.27". It is the IP of your computer on your local network.
5. Go to <private_ip>:1025
6. In index.php you can code PHP !
7. To stop:
`docker-compose stop`