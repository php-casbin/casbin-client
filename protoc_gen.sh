#!/bin/sh

./bin/opt/protobuf/protoc --proto_path=protos --php_out=src/ --grpc_out=src/ --plugin=protoc-gen-grpc=bin/opt/grpc_php_plugin ./protos/casbin.proto
