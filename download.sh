#!/bin/sh

echo "Cloining Templarian/MaterialDesign..."
git clone git@github.com:Templarian/MaterialDesign.git

echo "Copying the SVGs..."
cp -r MaterialDesign/svg/* resources/svg/

echo "Removing the cloned repo..."
rm -rf MaterialDesign/

echo "SVGs updated!"
