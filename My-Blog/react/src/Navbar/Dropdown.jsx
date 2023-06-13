import React, { useState } from "react";
import { Link } from "react-router-dom";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faAngleDown } from "@fortawesome/free-solid-svg-icons";
import styled from "styled-components";
import tw from "tailwind-react-native-classnames";

const DropdownContainer = styled.View`
  position: relative;
  display: inline-block;
`;

const DropdownButton = styled.TouchableOpacity`
  ${tw`bg-gray-800 p-2 rounded-md flex-row items-center justify-center`}
`;

const DropdownButtonText = styled.Text`
  ${tw`text-white font-bold uppercase text-sm mr-1`}
`;

const DropdownContent = styled.View`
  position: absolute;
  background-color: #1f2937;
  color: #fff;
  border-radius: 0.375rem;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.5);
  top: 40px;
  width: 150px;
  z-index: 50;
`;

const DropdownItem = styled.TouchableOpacity`
  ${tw`px-4 py-2 text-sm hover:bg-gray-700`}
`;

const DropdownMenu = () => {
  const [isOpen, setIsOpen] = useState(false);

  const handleDropdownToggle = () => {
    setIsOpen(!isOpen);
  };

  return (
    <DropdownContainer>
      <DropdownButton onPress={handleDropdownToggle}>
        <DropdownButtonText>Menu</DropdownButtonText>
        <FontAwesomeIcon icon={faAngleDown} color="#fff" size={16} />
      </DropdownButton>
      {isOpen && (
        <DropdownContent>
          <DropdownItem onPress={handleDropdownToggle}>
            <Link to="/">Home</Link>
          </DropdownItem>
          <DropdownItem onPress={handleDropdownToggle}>
            <Link to="/about">About</Link>
          </DropdownItem>
          <DropdownItem onPress={handleDropdownToggle}>
            <Link to="/categories">Categories</Link>
          </DropdownItem>
        </DropdownContent>
      )}
    </DropdownContainer>
  );
};

export default DropdownMenu;