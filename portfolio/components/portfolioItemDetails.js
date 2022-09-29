import React from 'react'

const portfolioItemDetails = ({ index, title, description, image, category, link, subTitle, images }) => {
  return (
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Modal Heading</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                Modal body..
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>

            </div>
        </div>
    </div>
  )
}

export default portfolioItemDetails