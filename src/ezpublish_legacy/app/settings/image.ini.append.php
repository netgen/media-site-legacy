<?php /* #?ini charset="utf-8"?

[ImageMagick]
IsEnabled=true
ExecutablePath=/opt/local/bin
Executable=convert
PreParameters=+profile "*"

[MIMETypeSettings]
Quality[]
Quality[]=image/jpeg;90
Quality[]=image/webp;90
# The global conversion rules
# Most will be converted to jpeg except gif and xpms
ConversionRules[]
ConversionRules[]=image/gif;image/png
ConversionRules[]=image/x-xpixmap;image/png
ConversionRules[]=image/webp;image/webp
# force aliases from jpeg originals to be generated as webp
ConversionRules[]=image/jpeg;image/webp
# force aliases from originals in any non-specified format to be generated as webp
#ConversionRules[]=*;image/webp
ConversionRules[]=*;image/jpeg
[ImageMagick]
QualityParameters[]=image/webp;-quality %1

*/ ?>
