//EEPROM formater

var k,a,d=0,b=0,h=0,l=0,p,o=0;

log("EEPROM format\n");
log("\n");
log("EEPROM k bit?(32~1024)?");
k=input();
log("\n");
log("|0%            |50%       100%|\n"); 
log(chr(1));

while(d<k*1024)
{
  a=0x50+b*0x04;

  i2cw(a,h,l,
       0,0,0,0,0,0,0,0,
       0,0,0,0,0,0,0,0,
       0,0,0,0,0,0,0,0,
       0,0,0,0,0,0,0,0);

  d=d+32;

  l=d%256;
  h=(d/256)%65536;
  b=d/65536;

  p=d*30/k/1024;

  if(p!=o)
  {
    log(chr(1));
  }

  o=p;
}

log("\ndone\n");
